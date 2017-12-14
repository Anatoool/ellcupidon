<div id="order_wrap">   
       <div id="order-message">
       	Заявка успешно оформлена, мы в скором времени вам перезвоним!
       </div>
       <div id="order">
        <div id="order_top">
            <span>Оставить заявку</span>
            <i id="order_close">&times</i>
        </div>
        
    <form action="./functions/order.php">  
       <div id="order_form">
           
           <div class="caption-wrap" id="name-wrap">
           		<i id="name-icon"></i>Ваше имя:
           </div>               
           <input id="input-name" type="text" name="login">

           <div class="caption-wrap" id="telephone-wrap">
           		<i id="telephone-icon"></i>Ваш телефон:
           </div>  
           <input id="tel-input" type="tel" placeholder="8999555..." name="tel">
            
           <div class="caption-wrap" id="message-wrap">
           		<i id="message-icon"></i>Ваше сообщение:
           </div>
           <textarea name="message" id="message" cols="30" rows="10"></textarea>  
             
              
           <div id="order-button">Оставить заявку</div>
           
        </div>
    </form>
   
    </div>  
      
</div>



<header id="header" class="cols col-12">         
		<ul id="main-ul">
			<div id="header-logo">
				<a id="header-logo-link" href="./mebel.php">
					<img src="./img/cupidon-logo.png" alt="Изготовление мебели на заказ в Улан-Удэ">
				</a>
			</div>
			<li>
				<a href="./mebel.php#main-portfolio-anchor">			<span>Проекты</span>
				</a>
			</li>
			<li>
				<a href="./mebel.php#services-anchor">				<span>Услуги</span>
				</a>
			</li>
			<li>
				<a href="./mebel.php#about_us_container-anchor">
					<span>Контакты</span>
				</a>
			</li>
			<li>
				<a href="" class="order"><span>Заявка</span></a>
			</li>      
		</ul>
		
		<a href="./interier.php" id="link-sections">
			<img src="../img/home.png" alt="" id="img-sections" title="Дизайн интерьера">
		</a>
		
		<div id="menu-button">
			<span id="menu-span">Меню</span><i id="menu-logo"></i>
		</div>
		
		<div id="dropdown-menu">
			<ul id="dropdown-ul">
				<li>
					<a href="./mebel.php#main-portfolio-anchor">	<span>Проекты</span>
					</a>
				</li>
				<li>
					<a href="./mebel.php#services-anchor">
						<span>Услуги</span>
					</a>
				</li>
				<li>
					<a href="./mebel.php#about_us_container-anchor">
						<span>Контакты</span>
					</a>
				</li>
				<li>
					<a href="" class="order">
						<span>Заявка</span>
					</a>
				</li>   
				<li>
					<a href="./interier.php" id="sections">
						<span>Дизайн интерьеров</span>
					</a>
				</li>       
			</ul>
		</div>
</header>