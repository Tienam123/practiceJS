/*class Rect {
  constructor(width, height) {
    // Конструктор - инициализирует екземпляр класса Rect представляет обычную функцию констрруктор
    this.width = width;
    this.height = height;
  }

  // метод , будет доабвлен в прототип Rect.prototype
  getArea() {
    return this.width * this.height;
  }

  getPerimeter() {
    return this.height * 2 + this.width * 2;
  }
}*/
/*
let r1 = new Rect(10, 20);
let r2 = new Rect(15, 9);

console.log('r1 area ' + r1.getArea());
console.log('r1 perimeter ' + r1.getPerimeter());

console.log('r2 area ' + r2.getArea());
console.log('r2 perimeter ' + r2.getPerimeter());
console.log(r1);
*/
/*
class Rect {
  constructor(width, height) {
    this._width = width;
    this._height = height;
  }

  //getter - синтаксис связывавющий свойство обьекта с методом
  //при обращениии к obj.width будет вызвана функция get width();

  get width() {
    console.log('get width()');
    return this._width;
  }

  get height() {
    console.log('get height()');
    return this._height;
  }

  get area() {
    console.log('get area()');
    return this._height * this._width;
  }
}

let r1 = new Rect(10, 20);
console.log('width ' + r1.width);
console.log('height ' + r1.height);
console.log('area ' + r1.area);
*/

