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
           <input id="input-name" type="text" name="login" required>
           

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
			<div id="header-logo" style="margin-top: -6px;">
				<a href="./interier.php" id="header-logo-link">
					<img src="./img/design-logo.png" alt="дизайн интерьера в Улан-Удэ"
					title = "На главную">
				</a>
			</div>
			<li>
				<a href="./interier.php#main-portfolio-anchor">			<span>Проекты</span>
				</a>
			</li>
			<li>
				<a href="./interier.php#stages-anchor">
					<span>Этапы</span>
				</a>
			</li>
			<li>
				<a href="./interier.php#about_us_container-anchor">
					<span>Контакты</span>
				</a>
			</li>
			<li>
				<a href="" class="order"><span>Заявка</span></a>
			</li>      
		</ul>
		
		<a href="./mebel.php" id="link-sections">
			<img src="../img/armchair.png" alt="" id="img-sections" title="Мебель">
		</a>
		
		<div id="menu-button">
			<span id="menu-span">Меню</span><i id="menu-logo"></i>
		</div>
		
		<div id="dropdown-menu">
			<ul id="dropdown-ul">
				<li>
					<a href="./interier.php#main-portfolio-anchor">	<span>Проекты</span>
					</a>
				</li>
				<li>
					<a href="./interier.php#stages-anchor">
						<span>Этапы</span>
					</a>
				</li>
				<li>
					<a href="./interier.php#about_us_container-anchor">
						<span>Контакты</span>
					</a>
				</li>
				<li>
					<a href="" class="order">
						<span>Заявка</span>
					</a>
				</li>     
				<li>
					<a href="./mebel.php" id="sections">
						<span>Перейти в раздел мебели</span>
					</a>
				</li>    
			</ul>
		</div>
</header>