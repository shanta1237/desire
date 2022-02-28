<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact US</title>
    <style>
        // Vars
$font-stack:sans-serif;
$background-color:rgb(145, 185, 248);
$primary-color:rgb(97, 177, 243);
$secondery-color:rgb(22, 53, 104);
// Reset Css
*{
    margin:0;
    padding:0;
    box-sizing: border-box;
    font-family: $font-stack;
}
html{
    // Mobile First
    body{
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: $background-color;
        margin:auto;
        // Main container
        .container{
            max-width: 1200px;
            width:85vw;
            height:80vh;
            display:grid;
            grid-template-columns:1fr;
            h2{
                display: flex;
                justify-content: center;
                align-items: center;
                color:$secondery-color;
                text-align: center;
                margin-bottom: 10px;
                span{
                    color:#efefef;
                    padding-right:5px;
                }
            }
            // Box styling
            .box{
                display: grid;
                box-shadow: 0px 0px 10px #000;
                // info section styling
                .info{
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                    align-items: center;
                    background-color: $primary-color;
                    color:$secondery-color;
                    h4{
                        margin:10px 0;
                    }
                    p{
                        margin:5px 0px;
                        &:nth-child(4){
                            margin-bottom: 20px;
                        }
                    }
                }
                h3{
                    background: #efefef;
                    padding:10px;
                }
                // form section styling
                form{
                    width: 100%;
                    display: grid;
                    background: #efefef;
                    padding:10px 10px;
                    // Name
                    .name,.company,.email,.tele{
                        margin-bottom:20px;
                        label{
                            font-size: 14px;
                            opacity: .9;
                        }
                        input{
                            padding:5px;
                            outline: none;
                            border:1px solid $primary-color;
                            width:95%;
                            height:60%;
                        }
                    }
                    // Text area
                    .message{
                        grid-column: 1/3;
                        label{
                            font-size: 14px;
                            opacity: .9;
                        }
                        #message{
                            height:90px;
                            width:100%;
                            padding:5px;
                            outline: none;
                            border:1px solid $primary-color;
                        }
                    }
                    // Submit container
                    .submit{
                        grid-column: 1/3;
                        // Submit btn
                        input[type=submit]{
                            cursor: pointer;
                            background: $primary-color;
                            letter-spacing: .2em;
                            padding:10px;
                            outline: none;
                            border:none;
                            border-radius: 5px;
                            display: block;
                            max-width: 80%;
                            width:50%;
                            margin:auto;
                            text-align: center;
                            transition: .3s linear;
                            font-weight: bold;
                            &:hover,&:focus{
                                color:#efefef;
                                background:$secondery-color;
                            }
                        }
                    }
                }
            }
        }
        // For Tablets and Desktops
        @media (min-width:700px){
                .container{
                    h2{
                        justify-content: flex-start;
                        align-items: flex-end;
                        font-size: 2em;
                    }
                    .box{
                        grid-template-columns: 1fr 2fr;
                        .info{
                            grid-row: 1/3;
                            font-size: 1.2em;
                        }
                    }
                }
        }
    }
}
        </style>
</head>
<body>
    <main class="container">
        <h2><span>Acme </span> web design</h2>
        <!-- Box -->
        <div class="box">
            <!-- info container -->
            <section class="info">
                <h4>Acme web design</h4>
                <p>
                    <i class="fas fa-road"></i>
                     <small>44 something st</small>
                </p>
                <p>
                    <i class="fas fa-phone-alt"></i>
                    <small>(666) 666-6666</small>
                </p>
                <p>
                    <i class="fas fa-envelope"></i>
                    <small>something@gmail.com</small>
                </p>
            </section>
            <!-- form container -->
            <h3>Email Us</h3>
            <form action="{{ route('contact.store') }}" method="POST">
                @csrf
                <!-- Name -->
                <div class="name">
                    <label for="name">First Name</label>
                    <br>
                    <input type="text" name="fname" id="name" required>
                </div>
                <div class="name">
                    <label for="name">Last Name</label>
                    <br>
                    <input type="text" name="lname" id="name" required>
                </div>
                <!-- Company -->
                
                <div class="name">
                    <label for="name">General</label>
                    <br>
                    <input type="text" name="general" id="name" required>
                </div>
                <div class="name">
                    <label for="name">Phone</label>
                    <br>
                    <input type="text" name="phone" id="name" required>
                </div>
                <!-- Email -->
                <div class="email">
                    <label for="email">Email</label>
                    <br>
                    <input type="email" name="email" id="email" required>
                </div>
                
                <!-- Message -->
                <div class="message">
                    <label for="message">Message</label>
                    <br>
                    <textarea name="Message" id="message" ></textarea>
                </div>
                <!-- Submit -->
                <div class="submit">
                    <input type="submit" value="SUBMIT">
                </div>
            </form>
        </div>
    </main>

</body>
</html>