const list = document.querySelector('#table');
let users = [
  {
    name: 'name',
    age: 'age',
    salary: 'salary',
  },
  {name: 'employee1', age: 30, salary: 400},
  {name: 'employee2', age: 31, salary: 500},
  {name: 'employee3', age: 32, salary: 600},
];
for (let i = 0; i < users.length; i++) {
  const tr = document.createElement('tr');
  for (const userKey in users[i]) {
    if (i === 0) {
      const th = document.createElement('th');
      th.textContent = users[i][userKey];
      th.style.padding = '10px';
      tr.append(th);
    } else {
      const td = document.createElement('td');
      td.setAttribute('value', userKey);
      td.style.padding = '10px';
      td.style.outline = '1px solid red';
      td.textContent = users[i][userKey];
      tr.append(td);
      if (td.getAttribute('value') === 'age') {

      }
    }
  }
  list.append(tr);
}
list.style.textAlign = 'center';

list.addEventListener('click', (e) => {
  if (e.target === e.currentTarget) {
    return;
  }
  if (e.target.getAttribute('value') === 'age') {
    let value = +e.target.textContent;
    e.target.innerHTML = value + 1;
  }
  if (e.target.getAttribute('value') === 'salary') {
    let salary = e.target.textContent * 0.1;
    e.target.innerHTML = Math.round(+e.target.textContent + salary);
  }
});