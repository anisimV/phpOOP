Начинаю изучать ООП:
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <div>
        <ul class = "lecture1">
            <b><p>Класс/объект:</p></b>
                <ul>
                    <li>Каждому классу — свой файл</li>
                    <li>Cвойства объектов</li>
                    <li>Динамические свойства объекта(не рекомендуется)</li>
                </ul>
        </ul>
        <ul class = "lecture2">
            <b><p>Методы объекта:</p></b>
                <ul>
                    <li>Создал класс <b>Dogs</b></li>
                    <li>Вроде получилось ипользовать метод</li>
                    <li><b>$this-></b> позволяет получить доступ к свойствам и методам класса внутри класса</li>
                    <li>Магические методы пишутся вначале файла</li>
                    <li><b>__destruct</b> - срабатывает, когда объект удаляется из памяти</li>
                    <li><b>__construct</b> - срабатывает при создании объекта</li>
                    <li>Немного поработал с файлами, создал класс <b>OpenRecordClose</b></li><br>
                        <ul>
                            <b><p>Шпаргалка на память:</p></b>
                        </ul>
                            <ul>
                                <li><b>'r'</b> файл открывается только для чтения</li>
                                <li><b>'r+'</b> файл открывается только для чтения с возможностью записи</li>
                                <li><b>'w'</b> файл открывается для записи</li>
                                <li><b>'w+</b> файл открывается для записи с возможностью чтения</li>
                                <li><b>'a'</b> файл открывается для записи.</li> <br>
                            </ul>
                </ul>
        </ul>
            <ul class = "lecture2">
                <b><p>Сатистические свойства/методы:</p></b>
                    <ul>
                        <ul>
                            <li>Потренировался. Создал класс <b>house</b></li>
                            <li>Статические св-ва / методы и константы принодлежат классу, а не объекту</li>
                            <li>Если вне класса - обращаться через имя класса</li>
                            <li>Если внутри класса то через <b>self::</b></li> <br>
                        </ul>
                    </ul>
            </ul>
                    <ul class = "lecture3">
                        <b><p>Наследование:</p></b>
                        <ul>
                            <li>Наследование - это классно и удобно!</li>
                            <li>Создал родительский <b>Product</b> и дочерние классы <b>Book</b> / <b>Notebook</b></li>
                        </ul>
                    </ul>
    </div>
</body>
</html>
