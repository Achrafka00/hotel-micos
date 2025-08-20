<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Micos Hotel</title>
      <link  rel="shortcut icon"  type="x-icon" href="images/hotel.jpg"/>
    <!-- Inclure les liens vers les bibliothèques CSS Tailwind CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">

<style>
body{
    margin: 0;
    padding: 0;
    justify-content: center;
    align-content: center;
    min-height: 100vh;
    font-family: 'jost', sans-serif;
    background: linear-gradient(to bottom,)
    .main{
        width:350px;
        height:500px;
        background:url....;
        border-radius: 10px;
        box-shadow: 4px 20px 50px #000;
    } 
    #chk{
        display: none;
    }
    .signup{
        position:none;
    width: 100%;
    height: 100%;
    }
    label{
        color:#fff;
        font-size:2.3em;
        justify-content: center;
        display: flex;
        margin: 60px;
        font-weight: bold;
        cursor: pointer;
        transition: .5s ease-in-out;

    }
    input{
        width:350px;
        height:500px;
        background:#fff;
        justify-content: center;
        display: flex;
        margin:20px auto;
        border:none;
        outline: none;
        border-radius: 5px;
    }
    button{ 
        width: 60%;
    height: 40%;
        margin: 10px auto;
    justify-content: center;
    display: block;
    color:#fff;
    background: #7e1ed8;
    font-size: 1 em;
    font-weight: bold;
    margin-top: 20px;
    outline: none;
    border: none;
    border-radius: 5px;
    transition: .2s ease-in;
    cursor: pointer;

    }
    button:hover {
        background: #a54df7
    }
    .login{
        height: 460px;
        background: #fff;
        border-radius:60% / 10%;
        transition: .8s ease-in-out;
        transform: translateY(-180px);

    }
    .login label{
        color:#630db4;
        transform: scale(.6);

    }
    #chk:checked ~ .login{
        transform: translateY(-500px);
    }
    #chk:checked ~ .login label{
        transform: scale(1);

    }
    #chk:checked ~ .signup label{
        transform: scale(.6)
    }
}

</style>

</head>

<div class="main">
    <input type="checkbox" id="chk" aria-hidden="true">
    <div class=""singnup>
        <form>
        <label for="chk" aria-hidden="true">sign up</label>
        <input type="text" name="txt" placeholder="user name" required="">
        <input type="email" name="email" placeholder="Email" required="">
        <input type="password" name="pswd" placeholder="Password" required="">
        <button type="submit">Sign Up</button>
    </form>
    </div>
<div class="login">
    <form>
        <label for="chk" aria-hidden="true">login</label>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="pswd" placeholder="Password" required>
        <button>login</button>

    </form>

</div>