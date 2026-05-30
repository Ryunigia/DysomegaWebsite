var c = document.getElementById("myCanvas");
var ctx = c.getContext("2d");
//c.width = window.innerWidth;
c.width = 1080;
c.height = 256;
var canvasScale = 1.5;
ctx.scale(canvasScale,canvasScale);

// calc
var centerX = c.width * 0.5;
centerX /= canvasScale;
var startXOffset = centerX * 1.0;

// global vars
var dot2DArr = [];
var imageObj = new Image();
var drawwidth = 4;
var lastUpdate = Date.now();

// load image
imageObj.onload = function() 
{ 
	var offset = drawwidth / 2;
	var step = drawwidth * 1;
	var imageWidth = this.width;
	var imageHeight = this.height;
	// start offset move
	//console.log(imageWidth);
	startXOffset -= imageWidth * 0.5;
	// dotarray to be made
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
	setTimeout(Animate, 500);
};
//console.log(dotArray.length);
//console.log(dot2DArr);
imageObj.src = 'https://dysomega.com/images/Dysomega_Banner.png';  

	//for(var x = 0; x < imageObj.width; x+=1)
			//for(var y = 0; y < imageObj.height; y+=1)
				//console.log(dotArr2D[0][0]);

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
	if (animationCount == 0)
		setTimeout(MicroDistortions, 3000);
	else if (animationCount == 1)
		setTimeout(RestoreDistortions, 3000);
	else if (animationCount == 2)
		setTimeout(BreakApart, 3000);
	else if (animationCount == 3)
		setTimeout(Restore, 3000);
	// reset
	else 
		{
			animationCount = -1;
			setTimeout(Animate, 5000);
			console.log("Resetting");
		}
	
	++animationCount;
}
function StopInterval()
{
	//console.log("STOP!");
	clearInterval(intervalTarget);
	
	// callback to animate
	Animate();
}
var intervalTarget;
function BreakApart()
{
		// break the logo have it fall down in pieces
		for(var y = 0; y < dot2DArr.length; y+=1)
			for(var x = 0; x < dot2DArr[y].length; x+=1)
			{
					//var dot = dot2DArr[y][x].y += 1;
					dot2DArr[y][x].vX = (Math.random() * 2) - 1;
					dot2DArr[y][x].vY = Math.random() * 16;
					//dot2DArr[y][x].vX = -100.0;
			}
		// loop
		//RenderImage();
		//setTimeout(Animate, 500);
		lastUpdate = Date.now();
		intervalTarget = setInterval(SolveVelocities, 100);
		setTimeout(StopInterval, 8000);
}
function SolveVelocities()
{
	// dt
	var now = Date.now();
	var dt = now - lastUpdate;
	dt *= 0.001;
	lastUpdate = now;
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
function MicroDistortions()
{
		// break the logo have it fall down in pieces
		for(var y = 0; y < dot2DArr.length; y+=1)
			for(var x = 0; x < dot2DArr[y].length; x+=1)
			{
					//var dot = dot2DArr[y][x].y += 1;
					dot2DArr[y][x].vX = (Math.random() * 2) - 1;
					dot2DArr[y][x].vY = Math.random();
					//dot2DArr[y][x].vX = -100.0;
			}
		// loop
		//RenderImage();
		//setTimeout(Animate, 500);
		lastUpdate = Date.now();
		intervalTarget = setInterval(SolveVelocitiesDistortions, 100);
		setTimeout(StopInterval, 10000);
}
function SolveVelocitiesDistortions()
{
	// dt
	var now = Date.now();
	var dt = now - lastUpdate;
	dt *= 0.001;
	lastUpdate = now;
	// move all
	for(var y = 0; y < dot2DArr.length; y+=1)
		for(var x = 0; x < dot2DArr[y].length; x+=1)
		{
			//var dot = dot2DArr[y][x].y += 1;
			dot2DArr[y][x].srcX += dot2DArr[y][x].vX * dt;
			dot2DArr[y][x].srcY += dot2DArr[y][x].vY * dt;
		}
	RenderImage();
}

// RestoreDistortions
function RestoreDistortions()
{
		// loop
		lastUpdate = Date.now();
		intervalTarget = setInterval(RestoreDistortionsTick, 100);
		setTimeout(StopInterval, 5000);
}
function RestoreDistortionsTick()
{
	// dt
	var now = Date.now();
	var dt = now - lastUpdate;
	dt *= 0.001;
	lastUpdate = now;
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

// restore blend back to orig poss
function Restore()
{
		// loop
		lastUpdate = Date.now();
		intervalTarget = setInterval(RestoreTick, 100);
		setTimeout(StopInterval, 5000);
}
function RestoreTick()
{
	// dt
	var now = Date.now();
	var dt = now - lastUpdate;
	dt *= 0.001;
	lastUpdate = now;
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