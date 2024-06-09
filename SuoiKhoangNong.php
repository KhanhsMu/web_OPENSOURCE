<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
        <link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
        <title>Responsive Website Travel</title>
    </head>
    <body>
    <header>
    <div class="navbar">
        <a href="index.html">Trang Chủ</a>
    </div>
</header>
            <!--==================== HOME ====================-->
            <section class="home" id="home">
            <?php 
                include 'connect.php';
                $id = 2; 
                $sql = "SELECT id, img_Index FROM location WHERE id = ?";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("i", $id);
                $stmt->execute();
                $result = $stmt->get_result();

                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                    echo '<img src="'.$row["img_Index"].'" alt="" class="home__img">'; 
                }
            ?>
                <div class="home__container ">
                    <div class="home__data">
                        <h1 class="home__data-title">Núi Thần Tài</h1>
                    </div>

                    <div class="home__social">
                        <a href="https://www.facebook.com/" target="_blank" class="home__social-link">
                            <i class="ri-facebook-box-fill"></i>
                        </a>
                        <a href="https://www.instagram.com/" target="_blank" class="home__social-link">
                            <i class="ri-instagram-fill"></i>
                        </a>
                        <a href="https://twitter.com/" target="_blank" class="home__social-link">
                            <i class="ri-twitter-fill"></i>
                        </a>
                    </div>
                </div>
            </section>

            <!--==================== ABOUT ====================-->
            
            <section class="about section" id="about">
                <div class="about__container">
                    <div class="about__data">
                        <h2 class="section__title about__title">NÚI THẦN TÀI</h2>
                        <?php 
                            include 'connect.php';
                            $id = 2; 
                            $sql = "SELECT id, des_about FROM location WHERE id = ?";
                            $stmt = $conn->prepare($sql);
                            $stmt->bind_param("i", $id);
                            $stmt->execute();
                            $result = $stmt->get_result();

                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                                echo '<p class="about__description">'.$row["des_about"].'</p>';
                            }
                        ?>
                    </div>
                </div>
                

                    <div class="about__img">
                        <?php 
                            include 'connect.php';
                            $id = 2; 
                            $sql = "SELECT id, img_about1, img_about2, img_about3 FROM location WHERE id = ?";
                            $stmt = $conn->prepare($sql);
                            $stmt->bind_param("i", $id);
                            $stmt->execute();
                            $result = $stmt->get_result();

                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                                echo '<img src="'.$row["img_about1"].'" alt="" class="about__img-one">';
                                echo '<img src="'.$row["img_about2"].'" alt="" class="about__img-two">';
                                echo '<img src="'.$row["img_about3"].'" alt="" class="about__img-three">';
                            }
                        ?>
                    </div>
                </div>
            </section>
            
           

           
            <section class="explore section">
                <div class="explore__container">
                    <div class="experience__container container grid">
                        <div class="explore__content grid">
                            <div class="explore__data">
                                <h2 >Nước Khoáng Nóng</h2>
                                <?php 
                            include 'connect.php';
                            $id = 2; 
                            $sql = "SELECT id, des_ex1, des_ex2, des_ex3 FROM location WHERE id = ?";
                            $stmt = $conn->prepare($sql);
                            $stmt->bind_param("i", $id);
                            $stmt->execute();
                            $result = $stmt->get_result();

                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                                echo '<span class="explore__description">'.$row["des_ex1"].'</span>';
                            }
                        ?>
                            </div>

                            <div class="experience__data">
                                <h2 class="experience__number">Tắm Bùn Khoáng</h2>
                                <?php 
                            include 'connect.php';
                            $id = 2; 
                            $sql = "SELECT id, des_ex1, des_ex2, des_ex3 FROM location WHERE id = ?";
                            $stmt = $conn->prepare($sql);
                            $stmt->bind_param("i", $id);
                            $stmt->execute();
                            $result = $stmt->get_result();

                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                                echo '<span class="explore__description">'.$row["des_ex2"].'</span>';
                            }
                        ?>
                            </div>

                            <div class="experience__data">
                                <h2 class="experience__number">Công Viên Nước</h2>
                                <?php 
                            include 'connect.php';
                            $id = 2; 
                            $sql = "SELECT id, des_ex1, des_ex2, des_ex3 FROM location WHERE id = ?";
                            $stmt = $conn->prepare($sql);
                            $stmt->bind_param("i", $id);
                            $stmt->execute();
                            $result = $stmt->get_result();

                            if ($result->num_rows > 0) {
                                $row = $result->fetch_assoc();
                                echo '<span class="explore__description">'.$row["des_ex3"].'</span>';
                            }
                        ?>
                            </div>
                            <h3 class="experience__number">Còn nhiều hoạt động hấp dẫn khác</h3>
                        </div>
                    </div>
                    <div id="carouselExampleIndicators" class="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img src="img/ex_ThanTai2.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="img/ex_ThanTai1.jpg" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                            <img src="img/ex_ThanTai3.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>    
            </section>

            <section>
                <h2 style="text-align: center;">Hướng dẫn đường đi đến núi Thần Tài</h2>
                <div style="text-align: center;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15343.504230748289!2d108.0095421922349!3d15.967847654129107!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3141f7958d4a911b%3A0x7aa95bb7a598e3eb!2zQ8O0bmcgdmnDqm4gU3Xhu5FpIGtob8OhbmcgbsOzbmcgTsO6aSBUaOG6p24gVMOgaSwgUUwxNEcsIEhvw6AgUGjDuiwgSMOyYSBWYW5nLCDEkMOgIE7hurVuZywgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1717901665812!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            </section>
            <section>
		<footer class="footer-distributed">

			<div class="footer-right">

				<a href="#"><i class="fa fa-facebook"></i></a>
				<a href="#"><i class="fa fa-twitter"></i></a>
				<a href="#"><i class="fa fa-linkedin"></i></a>
				<a href="#"><i class="fa fa-github"></i></a>

			</div>

			<div class="footer-left">

				<p class="footer-links">
					<a class="link-1" href="#">Gmail</a>
					<a href="#"><i class="fa fa-gmail"></i>abcdefg@gmail.com</a>
				</p>
				
			</div>

		</footer>
    </section>
    </body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<style>
.home__img {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100vh;
    object-fit: cover;
    z-index: -1;
    margin-top: 3rem;
}
.home__container {
    position: relative;
    height: calc(100vh - var(--header-height));
    align-content: center;
    row-gap: 3rem;
}


.home__data-title, 
.home__social-link, 
.home__info {
    color: var(--white-color);
}


.home__data-title {
        position: absolute;
    top: 550%;
    left: 7%;
    font-size: 70px;
    color: #fff;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin-bottom: 2rem;
}
.home__social {
    display: flex;
    color: #fff;
    margin-left: 10%;
    padding: 10px;
    row-gap: 2rem;
    
}

.home__social-link {
    font-size: 1.2rem;
    width: max-content;
}

.about__container {
        row-gap: 2.5rem;
        margin-top: 45rem; /* Add this line to move the about section down */
}

.about__data {
        text-align: center;
}

.about__description {
        margin-bottom: var(--mb-2);
}

.about__img {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 2rem;
}

.about__img-one,
.about__img-two,
.about__img-three {
    
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin: 0 1rem; /* Khoảng cách giữa các ảnh */
}

.about__title {
        font-size: 2.5rem;
        text-align: center;
        margin-bottom: 2rem;
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
}

.about__description {
        font-size: 1.2rem;
        text-align: center;
        line-height: 1.5;
        color: #777;
}

.about__img img {
        width: 100%;
        max-width: 300px;
        height: 200px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}
.explore__container {
    display: flex;
  align-items: center;
  justify-content: space-around;
  background-color: #f5f5f5;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}
.explore__content {
    
    max-width: 500px;
}
.explore__data {
    flex: 1;
    padding: 1rem;
}


.carousel-inner {
    
    width: 700px; /* Đặt chiều rộng tối đa cho hình ảnh */
}

.carousel-item img {
    width: 100%;
    height: 100%;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    
}
</style>