 p {
    margin-bottom: 20px;
}
html{
    font-size: 16px;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
}

.container {
    width: 80%;
    margin: 0 auto;
}

header {
    background-color: #000000;
    color: #fff;
    padding: 20px 0;
}

header h1 {
    margin: 0;
}

nav ul {
    list-style: none;
    padding: 0;
}

nav ul li {
    display: inline;
    margin-right: 20px;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
}

section {
    padding: 50px 0;
}

section h2 {
    margin-bottom: 30px;
}

.portfolio-items {
    display: flex;
    float: left;    
}

.portfolio-item {
    flex: 0 0 30%;
    margin-right: 5%;
    margin-bottom: 30px;
}

.portfolio-item img {
    width: 100%;
    height: 421px;
}

.profile-picture {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    margin-top: 0rem;
}
footer {
    background-color: #000000;
    color: #fff;
    padding: 0px 0;
    position: fixed;
    width: 100%;
    bottom: 0;
    text-align: center;
}
.contact-items {
    display: flex;
    justify-content: space-around;
    align-items: center;
    flex-wrap: wrap; 
}
.contact-item {
    flex: 0 1 30%;
    text-align: center;
    margin: 10px;
}
.contact-item img{
    max-width: 100%;
    height: auto;
}
label{
    position: absolute;
    width: 45px;
    height: 22px;
    right: 20px;
    top: 20px;
    border: 2px solid;
    border-radius: 20px;
}
label:before{
    position: absolute;
    content: '';
    width:17px;
    height: 17px;
    left: 1px;
    top: 1px;
    border-radius: 50%;
    background: #fffefe;
    cursor: pointer;
    transition: 0.4s;
}
label.active:before{
    left: 24px;
    background: #fff;
}
body.night{
    background: #000;
    color: #fff;
}
@media (max-width: 768px) {
    .container {
        width: 90%;
    }

    .portfolio-item {
        flex: 0 0 45%;
        margin-right: 2.5%;
    }
}
.about-content {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
}

.about-image {
    flex: 0 0 30%;
    margin-right: 5%;
    margin-bottom: 20px;
}

.about-image img {
    width: 100%;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.about-text {
    flex: 1;
}

.about-text h2 {
    margin-bottom: 20px;
    font-size: 1.8rem;
}

