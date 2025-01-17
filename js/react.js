function Car(props) {

    const classes = ['card']
    if (props.car.marked) {
        classes.push('marked')
    }
    return ( <
        div className = { classes.join(' ') }
        onClick = { props.onMark } >
        <
        div className = "card-img" >
        <
        img src = { props.car.img }
        alt = { props.car.name }
        /> < /
        div > <
        h3 > { props.car.name } < /h3> <
        p > { props.car.price }
        $ < /p> < /
        div >
    )
}

//ручное добавление компонентов
//const app=(
//<div className="app">
//<div className="list">
//<Car car={{name:'Mercedes amg coupe', price: '1800', img: 'https://auto.ndtvimg.com/car-images/big/mercedes-amg/gle-coupe/mercedes-amg-gle-coupe.jpg?v=2'}}/>
//<Car car={{name:'BMW M2 Coupe', price: '20000', img: 'https://mochamanstyle.com/wp-content/uploads/2015/10/2016-BMW-M2-Coupe.jpg'}} />
//<Car car={{name:'Audi TT', price: '15000', img: 'https://article.images.consumerreports.org/w_598,h_436/prod/content/dam/cro/news_articles/cars/2016-Audi-TT-pr-1-2016-598'}} />
//<Car car={{name:'Rolls Royce', price: '50000', img: 'http://cdn-ds.com/stock/2017-Bentley-Continental-GT-V8-Coupe--Beverly-Hills-CA/seo/VAMP16966-SCBFT7ZA0HC061335/sz_108215/image-1.jpg'}} />
//</div>
//</div>
//)

//динамическое добавление компонентов
class App extends React.Component {
    state = {
        cars: [
            { marked: false, name: 'BMW M2 Coupe', price: '20000', img: 'https://mochamanstyle.com/wp-content/uploads/2015/10/2016-BMW-M2-Coupe.jpg' },
            { marked: false, name: 'Audi TT', price: '15000', img: 'https://article.images.consumerreports.org/w_598,h_436/prod/content/dam/cro/news_articles/cars/2016-Audi-TT-pr-1-2016-598' },
            { marked: false, name: 'Rolls Royce', price: '50000', img: 'http://cdn-ds.com/stock/2017-Bentley-Continental-GT-V8-Coupe--Beverly-Hills-CA/seo/VAMP16966-SCBFT7ZA0HC061335/sz_108215/image-1.jpg' },
            { marked: false, name: 'Mercedes amg coupe', price: '1800', img: 'https://auto.ndtvimg.com/car-images/big/mercedes-amg/gle-coupe/mercedes-amg-gle-coupe.jpg?v=2' }
        ],
        visible: true, //для отображения карточек
        appTitle: 'Приложение для автомобилей'
    }

    handleCar(name) { //определение машины по имени
        const cars = this.state.cars.concat() //копируем массив, что бы не мутировать основной
        const car = cars.find(c => c.name === name)
        car.marked = !car.marked //изменение состояния
        this.setState({ cars }) //изменение основного массива
    }

    toggleHandler() { //оброботчик кнопки
        this.setState({ visible: !this.state.visible })
    }

    renderCars() {
        if (!this.state.visible) {
            return null
        }
        return this.state.cars.map(car => {

            return ( <
                Car car = { car }
                key = { car.name + Math.random } // данная запись key гарнтирует, то, что key будет уникальным
                onMark = { this.handleCar.bind(this, car.name) }
                />
            )
        })

    }
    titleChangeHandler(title) { //функция изменения заголовка через input
        if (title.trim() === '') { //если строка пустая, то разметка не прыгает, не дает полностью стереть строку
            return
        }
        this.setState({
            appTitle: title
        })
    }
    render() {
        const style = {
                marginRight: 20
            } //для создания стилей
        return ( <
            div className = "app" >
            <
            h1 > { this.state.appTitle } < /h1> <
            button onClick = {
                () => this.toggleHandler()
            }
            style = { style }

            >
            Toggle <
            /button>

            <
            input type = "text"
            placeholder = "Изменить заголовок"
            onChange = {
                (event) => this.titleChangeHandler(event.target.value)
            }
            value = { this.state.appTitle } //получает значение заголовка, что бы не прыгала разметка
            /> <
            hr / >
            <
            div className = "list" > { this.renderCars() } <
            /div>

            <
            /div>


        )

    }

}


ReactDOM.render( < App / > , document.getElementById('root'))