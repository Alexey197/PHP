const title1 = document.querySelector('h1')
const title2 = document.querySelector('h2')

if (title1.dataset.time === '1') {
  title2.textContent = 'Утро'
} else if (title1.dataset.time === '2') {
  title2.textContent = 'День'
} else if (title1.dataset.time === '3') {
  title2.textContent = 'Вечер'
} else if (title1.dataset.time === '4') {
  title2.textContent = 'Ночь'
}
