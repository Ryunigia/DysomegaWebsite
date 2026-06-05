var c = document.getElementById("hero-magic");
var ctx = c.getContext("2d");
//c.width = window.innerWidth;
c.width = 2000;
c.height = 960;
var canvasScale = 1.0;
ctx.scale(canvasScale,canvasScale);

// calc
var centerX = c.width * 0.5;
centerX /= canvasScale;
var startXOffset = centerX * 1.0;

// global vars
var dot2DArr = [];
var imageObj = new Image();
var drawwidth = 8;
var lastUpdate = Date.now();
var delayBetweenAnimations = 5000;
var delayInitialAnimations = 5000;
var animationPlaytime = 10000;
var generalFrameInterval = 100;
var animationPlaySpeedMultiplier = 0.001;
var intervalTarget;

// load image
imageObj.onload = function() 
{ 
	var offset = drawwidth / 2;
	var step = drawwidth * 1;
	var imageWidth = this.width;
	var imageHeight = this.height;
	startXOffset -= imageWidth * 0.5;
	for(var y = 0; y < imageHeight; y+=step, offset *= -1)
	{
			var dotArr = [];
			for(var x = offset; x < imageWidth; x+=step)
					dotArr.push({'x': startXOffset + x,'y': y, 
				'srcX' : x, 'srcY' : y, 
				'origX': startXOffset + x, 'origY' : y, 
				'origSX' : x, 'origSY' : y,
				'vX' : 0, 'vY' : 0});
			dot2DArr.push(dotArr);
	}
	RenderImage();
	setTimeout(Animate, delayInitialAnimations);
};
imageObj.src = 'images/Dysomega_Banner.png';  

function RenderImage()
{	
	// clear
	ctx.clearRect(0, 0, c.width, c.height);
	// draw
	for(var y = 0; y < dot2DArr.length; y+=1)
		for(var x = 0; x < dot2DArr[y].length; x+=1)
		{
			var dot = dot2DArr[y][x];
			ctx.drawImage(imageObj, dot.srcX, dot.srcY, drawwidth, drawwidth
			, dot.x, dot.y, drawwidth, drawwidth);
		}
}

// animate
var animationCount = 0;
function Animate()
{
	console.log("Activating Animation " + animationCount);
		// select a random animation
	switch (animationCount)
	{
		case 0:
			PlayMicroDistortions();
			break;
		case 1:
			PlayRestoreDistortions();
			break;
		case 2:
			StartDisplacements();
			break;
		case 3:
			PlayRestore();	
			break;
		default:
			animationCount = -1;
			setTimeout(Animate, delayBetweenAnimations);
			console.log("Resetting");
			break;
	}
	
	++animationCount;
}
function StopInterval()
{
	//console.log("STOP!");
	clearInterval(intervalTarget);
	
	// callback to animate
	setTimeout(Animate, delayBetweenAnimations);
}

function StartDisplacements()
{
		// break the logo have it fall down in pieces
		for(var y = 0; y < dot2DArr.length; y+=1)
			for(var x = 0; x < dot2DArr[y].length; x+=1)
			{
				// see if skipping randomly improves?
				if (y < dot2DArr.length * 0.1)
				{
					dot2DArr[y][x].vX = 0;
					dot2DArr[y][x].vY = 0;
				}
				else
				{
					dot2DArr[y][x].vX = (Math.random() * 0.1) - 0.05;
					dot2DArr[y][x].vY = Math.random() * 0.5 + (y * 0.02);
					dot2DArr[y][x].vY *= dot2DArr[y][x].vY;
				}
			}
		// loop
		lastUpdate = Date.now();
		intervalTarget = setInterval(SolveDisplacement, generalFrameInterval);
		setTimeout(StopInterval, animationPlaytime);
}
function SolveDisplacement()
{
	// dt
	var dt = CalculateCurrentDT();
	
	// move all
	for(var y = 0; y < dot2DArr.length; y+=1)
		for(var x = 0; x < dot2DArr[y].length; x+=1)
		{
			//var dot = dot2DArr[y][x].y += 1;
			dot2DArr[y][x].x += dot2DArr[y][x].vX * dt;
			dot2DArr[y][x].y += dot2DArr[y][x].vY * dt;
		}
	RenderImage();
}
// MicroDistortions
function PlayMicroDistortions()
{
		// break the logo have it fall down in pieces
		for(var y = 0; y < dot2DArr.length; y+=1)
			for(var x = 0; x < dot2DArr[y].length; x+=1)
			{
				dot2DArr[y][x].vX = (Math.random() * 2) - 1;
				dot2DArr[y][x].vY = Math.random();
			}
		// loop
		lastUpdate = Date.now();
		intervalTarget = setInterval(SolveVelocitiesDistortions, generalFrameInterval);
		setTimeout(StopInterval, animationPlaytime);
}
function SolveVelocitiesDistortions()
{
	// dt
	var dt = CalculateCurrentDT();
	
	// move all
	for(var y = 0; y < dot2DArr.length; y+=1)
		for(var x = 0; x < dot2DArr[y].length; x+=1)
		{
			dot2DArr[y][x].srcX += dot2DArr[y][x].vX * dt;
			dot2DArr[y][x].srcY += dot2DArr[y][x].vY * dt;
		}
	RenderImage();
}

// RestoreDistortions
function PlayRestoreDistortions()
{
		// loop
		lastUpdate = Date.now();
		intervalTarget = setInterval(RestoreDistortionsTick, generalFrameInterval);
		setTimeout(ResetAll, animationPlaytime);
}
function RestoreDistortionsTick()
{
	// dt
	var dt = CalculateCurrentDT();
	
	// move all
	for(var y = 0; y < dot2DArr.length; y+=1)
		for(var x = 0; x < dot2DArr[y].length; x+=1)
		{
			var xDir = dot2DArr[y][x].origSX - dot2DArr[y][x].srcX;
			var yDir = dot2DArr[y][x].origSY - dot2DArr[y][x].srcY;
			dot2DArr[y][x].srcX += xDir * dt;
			dot2DArr[y][x].srcY += yDir * dt;
		}
	RenderImage();
}

function ResetAll()
{
	// reset all
	StopInterval();
	for(var y = 0; y < dot2DArr.length; y+=1)
		for(var x = 0; x < dot2DArr[y].length; x+=1)
		{
			dot2DArr[y][x].srcX = dot2DArr[y][x].origSX;
			dot2DArr[y][x].srcY = dot2DArr[y][x].origSY;
			dot2DArr[y][x].x = dot2DArr[y][x].origX;
			dot2DArr[y][x].y = dot2DArr[y][x].origY;

		}
	RenderImage();
}

// restore blend back to orig poss
function PlayRestore()
{
		// loop
		lastUpdate = Date.now();
		intervalTarget = setInterval(RestoreDisplacements, generalFrameInterval);
		setTimeout(ResetAll, animationPlaytime);
}
function RestoreDisplacements()
{
	// dt
	var dt = CalculateCurrentDT();
	
	// move all
	for(var y = 0; y < dot2DArr.length; y+=1)
		for(var x = 0; x < dot2DArr[y].length; x+=1)
		{
			var xDir = dot2DArr[y][x].origX - dot2DArr[y][x].x;
			var yDir = dot2DArr[y][x].origY - dot2DArr[y][x].y;
			dot2DArr[y][x].x += xDir * dt;
			dot2DArr[y][x].y += yDir * dt;
		}
	RenderImage();
}

function CalculateCurrentDT()
{
	var now = Date.now();
	var dt = now - lastUpdate;
	dt *= animationPlaySpeedMultiplier;
	lastUpdate = now;
	return dt;
}

// glitch
function Glitch()
{
		var randomY = 4;
		dot2DArr.forEach(function(arrayment) 
		{
				arrayment.forEach(function(element)
				{
					if (element.y == randomY)
						element.x += 2;
					ctx.drawImage(imageObj, element.x, element.y, drawwidth, drawwidth
													, element.srcX, element.srcY, drawwidth, drawwidth);
				});
		});
	
	// loop
	setTimeout(Animate, 500);
}