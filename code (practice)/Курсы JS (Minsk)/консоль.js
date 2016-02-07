function distance (s){
	var v = prompt ('v');
	var t = prompt ('t');
	var a = prompt ('a');
	s = v*t+(a*t*t)/2;
	document.write(s);
	}
	
рпарпао
////////////////////////////////////
	<!DOCTYPE html>
<html>
    <head>
       <title>Добавим еще одно поле </title>
    </head>
    <body>
        <h1>Форма входа</h1>
        <form action="/echo" method="post">
            <label for="login-field">Ваш логин</label>
            <input type="text" name="login" id="login-field"><br>
            <label for="password-field">Ваш пароль</label>
            <input type="text" name="password" id="password-field"><br>
			<input type="submit" value="Войти">
            <!-- подпись с этим текстом -->
            <!-- добавьте поле сюда -->
        </form>
    </body>
</html>

//////////////////////////////////////////////////////////////////////////////////////////////////////////
<!DOCTYPE html>
<html>
    <head>
       <title>Испытание: форма регистрации</title>
    </head>
    <body>
        <h1>Регистрация</h1>
        <form action="/echo" method="post">
            Ваш логин (email):
            <input type="text" name="login"></input><br>
            
            Пароль:
            <br><input type="text" name="password" id="password-field"></input><br>
            Информация о себе:
            <textarea type="text" rows="3"></textarea><br>
            
            <input type="checkbox" checked> Подписаться на рассылку  </input>
            
            <input type="submit" value="Зарегестрироваться"></input>
        </form>
    </body>
</html>

///

html, body{
    margin:0;
    padding:0;
}
body{
    width:260px;
    padding:10px 20px;
    font-family:"Arial", sans-serif;
    font-size:14px;
    line-height:1.5;
    color:black;
}
h1{
    font-size:18px;
    font-weight:normal;
    margin:0;
    margin-bottom:10px;
}
input[type="submit"]{
    display:block;
    margin-top:10px;
}
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////