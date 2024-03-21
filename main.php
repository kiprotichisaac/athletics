*{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    outline: none;
    border: none;
    text-decoration: none;
    text-transform: capitalize;
    transition: .2s linear;
    overflow-x: hidden;
}
body{
    font-family: 'Poppins', sans-serif;
    font-size: 12px;
    background: linear-gradient(45deg, rgb(201, 157, 231), rgb(215, 215, 215));
}

.body{
    margin-left: 10%;
}


.header{
    padding-left: 12%;
    display: flex;
    flex-direction: row;
    position: static;
    width: 90%;
    align-items: center;
    margin-left: 12px;
    margin-top: 22px;
    justify-content: space-between;
}
.head{
    font-weight: bold;
    font-size: 24px;
}
.pic{
    display: flex;
    justify-content: center;
    align-items: center;
    background: #000;
    width: 80px;
    height: 80px;
    border-radius: 50%;
    margin: 2px;
}

.dropdown-content {
    display: none;
    top: 11%;
    right: 9%;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    z-index: 1;
    border-radius: 7px;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {
    background-color: #f1f1f1;
}
.dropdown-content::before {
    content: "";
    background: transparent;
    position: absolute;
    top: -11px;
    right: 2px;
    opacity: 0.7px;
    border-width: 12px;
    border-style: solid;
    border-color: transparent transparent #000 transparent;
}
.show {
    display: block;
}


.fa-user{
    font-size: 42px;
    color: white;
    cursor: pointer;
}

.programmes{
    margin-top: 20px;
    margin-left: 2%;
    width: 90%;
    max-width: 91%;
    height: 550px;
    overflow-y: auto;
    border-radius: 2px;
    background: #d0b4b4;
}

.event{
    display: flex;
    background: #333;
    padding: 10px;
    margin: 12px;
    color: white;
    /* width: 700px; */
    justify-content: space-between;
    border-radius: 12px;
}

.top{
    background: rgba(68, 68, 68, 0.4);
    position: sticky;
    overflow: hidden;
}

.divider{
    position: relative;
    background: #000;
    content: '';
    justify-content: center;
    left: 0;
    margin-left: 5%;
    width: 90%;
    height: 2px;
}

.grid-content{
    /* position:static; */
    padding: 15px 9%;
    padding-bottom: 100px;
}

.grid-content .heading{
    text-align: center;
    padding-bottom: 15px;
    color: #fff;
    text-shadow: 0 5px 10px rgba(0, 0, 0, .2);
    font-size: 30px;
}

.grid-content .box-container{
    position: relative;
    display: grid;
    right: 2%;
    grid-template-columns: repeat(auto-fit, minmax(270px, 1fr));
    gap: 15px;
}

.grid-content .box-container .box{
    box-shadow: 0 5px 10px rgba(0, 0, 0, .2);
    border-radius: 5px;
    background: #fff;
    text-align: center;
    padding: 30px 20px;
}
.grid-content .box-container .box img{
    height: 80px;
}
.grid-content .box-container .box h3{
    color: #444;
    font-size: 22px;
    padding: 10px 0;
}
.grid-content .box-container .box p{
    color: #777;
    font-size: 15px;
    /* padding: 10px 0;
     */
     line-height: 1.8;
}
.grid-content .box-container .box .btn{
    margin-top: 10px;
    display: inline-block;
    background: #333;
    color: #fff;
    font-size: 17px;
    border-radius: 5px;
    padding: 8px 25px;
}
.grid-content .box-container .box .btn:hover{
    letter-spacing: 1px;
}
.grid-content .box-container .box:hover{
    /* cursor: pointer; */
    box-shadow: 0 10px 15px rgba(0, 0, 0, .3);
    transform: scale(1.03);
}
@media (max-width:768px){
    .container{
        padding: 20px;
    }
}

.add{
    display: flex;
    justify-content: center;
    align-items: center;
    position: fixed;
    border-radius: 50%;
    bottom: 20px;
    right: 10%;
    background: rgb(196, 196, 49);
    width: 100px;
    height: 100px;
}
.fa-plus{
    font-size: 42px;
    font-weight: bold;
}
  

.footer {
    position: fixed;
    background-color: #333; /* Background color */
    color: white; /* Text color */
    padding: 20px 0; /* Padding */
    text-align: center; /* Center-align text */
    position: sticky;
    bottom: 0; /* Stick to the bottom of the viewport */
    width: 100%; /* Full width */
  }
  
  .footer p {
    margin: 0; /* Remove default margin */
  }
  
  .row-content{
    display: flex;
    
  }

  .todo{
    padding-left: 12px;
    display: flex;
    flex-direction: column;
    background: #d0b4b4;
    border-radius: 6px;
    margin-left: 12px;
    margin-right: 6px;
  }
  .addBtn{
    background: #333;
    width: 40px;

  }

