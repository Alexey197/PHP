const title1 = document.querySelector('h1')
const title2 = document.querySelector('h2')

let data1 = title1.dataset.time

if (title1.dataset.time === '1') {
  title2.textContent = 'Утро'
} else if (data1 === '2') {
  title2.textContent = 'День'
} else if (data1 === '3') {
  title2.textContent = 'Вечер'
} else if (data1 === '4') {
  title2.textContent = 'Ночь'
}
