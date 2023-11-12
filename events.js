class Rect {
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
}

let r1 = new Rect(10, 20);
let r2 = new Rect(15, 9);

console.log('r1 area ' + r1.getArea());
console.log('r1 perimeter ' + r1.getPerimeter());

console.log('r2 area ' + r2.getArea());
console.log('r2 perimeter ' + r2.getPerimeter());
console.log(r1);

