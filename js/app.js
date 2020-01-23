/*function car(name, model, owner, year, phone, image){
    return {
        name,model, owner, year, phone, image
    }
}*/
//тоже самое по новому стандарту
const car = ( name,model, owner, year, phone, image)=>({ name,model, owner, year, phone, image})
const log=(text, type, date=new Date())=>({text,type,date})

const cars = [
car('Rols Roys', 'Presedent', 'Филипп', '2015', '+75161511','image/cars/rols.jpg'),
car('Dodge', 'Viper', 'Тимати', '2016', '+75555555','image/cars/dodge.jpg'),
car('Mustang', 'Sport', 'Бетмен', '1983', '+5465465','image/cars/mustang.jpg')
]
new Vue({
    el: '#app',
    data: {
        cars: cars,
        car: cars[0],
        logs:[],
        selectedCarIndex: 0, //для определения индекса для подсветки элемента
        phoneVisibility: false,//первоночальное состояние для отображения телефона
        search: '', //для организации фильтрации
        modalVisibility: false//модальное окно для покупки
    },
    methods:{
        selectCar(index){
           
            this.car=cars[index]
            this.selectedCarIndex=index
        },
        newOrder(){
            this.modalVisibility=false//закрываем модальное окно
            this.logs.push(
                log(`Выполнена покупка: ${this.car.name} - ${this.car.model}`, 'OK' )
            )

        },
        canselOrder(){
            this.modalVisibility=false//закрываем модальное окно
            this.logs.push(
                log(`Отмена покупки: ${this.car.name} - ${this.car.model}`, 'cnl' )
            )
        }
    } ,
    computed:{
        phoneBtnText(){//определение состояния кнопки Показать телефон
            return this.phoneVisibility ? 'Скрыть телефон' : 'Показать телефон'
        },
        filteredCars(){
    return this.cars.filter(car=>{
        return car.name.indexOf(this.search)>-1 || car.model.indexOf(this.search)>-1
    })
        }
    },
    filters: {
        date(value){
        return value.toLocaleString()//value это значение date, которое создается в log
    }
}
})