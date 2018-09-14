Вітаю!
Даний проект розроблений для отримання інформації про товари за допомогою технологій JWT (Json Web Token) та API.
В базі уже є користувач з даними:
email: test@gmail.com
password: secret
за допомогою цих диних потрібно пройти авторизацію за допомогою Postman (POST запит) на URL: http://saganromanwork.000webhostapp.com/public/index.php/api/auth/login
після отримаємо токен.
Щоб отримати дані про товари що відповідають заданим критеріям слід відправити POST запит на URL:  http://saganromanwork.000webhostapp.com/public/index.php/api/api/getItems
із параметрами
token - копіюємо із вкладки для авторизації
priceInt - діапазон цін (2 значення розділені комою)
dateInt - діапазон дат (2 значення розділені комою)
sortByDate - приймає значення аsc або desc,задає порядок сортування по даті, має пріоритет над сортуванням по імені 
sortByName - приймає значення аsc або desc,задає порядок сортування по імені товару
	Приклад коректно введених параметрів:
priceInt - 26,30
dateInt - 2018-05-23,2018-08-23
sortByDate -  аsc 
sortByName -  desc


Дамп бази на всяк випадок теж вложений : jwt.sql