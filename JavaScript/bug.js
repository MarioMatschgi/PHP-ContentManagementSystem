var bug;

function setup() {
  var cnv = createCanvas(windowWidth, windowHeight);
  cnv.position(0, 0);
  cnv.style("z-index", "-10");

  bug = new Bug();
}

function draw() {
  clear();

  bug.update();
}

function Bug() {
  this.size = 20;
  this.pos = createVector(-this.size, -this.size);
  this.targetPos = this.pos;
  this.speed = 1;

  this.update = function () {
    this.targetPos = createVector(mouseX, mouseY);
    console.log(this.targetPos);

    var sqDist = p5.Vector.sub(this.targetPos, this.pos).magSq();
    if (sqDist > 1000) {
      var dir = createVector(this.targetPos.x - this.pos.x, this.targetPos.y - this.pos.y);
      dir.normalize();
      this.pos.x += this.speed * dir.x;
      this.pos.y += this.speed * dir.y;
    }

    this.draw();
  }

  this.draw = function () {
    ellipse(this.pos.x, this.pos.y, this.size, this.size);
  }
}