/*пробный файл для изучения React. диномическое добавление карточек с помощью JS. 
далее будет изменено в React в файле React.js*/ 

const cars=[
    {name:'BMW M2 Coupe', price: '20000', img: 'https://mochamanstyle.com/wp-content/uploads/2015/10/2016-BMW-M2-Coupe.jpg'},
    {name:'Audi TT', price: '15000', img: 'https://article.images.consumerreports.org/w_598,h_436/prod/content/dam/cro/news_articles/cars/2016-Audi-TT-pr-1-2016-598'},
    {name:'Rolls Royce', price: '50000', img: 'http://cdn-ds.com/stock/2017-Bentley-Continental-GT-V8-Coupe--Beverly-Hills-CA/seo/VAMP16966-SCBFT7ZA0HC061335/sz_108215/image-1.jpg'},
    {name:'Mercedes amg coupe', price: '1800', img: 'https://auto.ndtvimg.com/car-images/big/mercedes-amg/gle-coupe/mercedes-amg-gle-coupe.jpg?v=2'}
]
function createCar(car){
    return`
                    <div class="card">
                        <div class="card-img">
                            <img src="${car.img}"
                             alt="${car.name}">
                        </div>
                        <h3>${car.name}</h3>
                        <p>${car.price} $</p>
                    </div>
    `
}

const templates = cars.map(car => createCar(car))
const html=templates.join(' ')


document.querySelector('.list').innerHTML=html