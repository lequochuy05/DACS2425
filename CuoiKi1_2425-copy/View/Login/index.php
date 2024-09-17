<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link rel="Shortcut icon" href="img/logo.png" /> -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <title>OnixShop - Login</title>
  </head>
  <body>
    <div class="container">
      <header>
        <div id="head1">
          <img src="img/logo.png" alt="" />
          <div class="logo-text">
            <div class="logo-name">ONIX</div>
            <a href="index.php?controller=register&action=add_user">Register</a>
          </div>
        </div>
        <div id="head2">
          <a href="#">About - Onix</a>
        </div>
      </header>
      <main>
        <div class="main1"><img src="img/logo.png" alt="" /></div>
        <div class="main2">
          <form action="" method="POST">
            <div class="head">Login</div>
            <div class="middle">
              <input
                type="text" name="username"
                placeholder="Email/Username"
              />
              <br />
              <input type="password" name="password" placeholder="Password" /> 
              <input type="submit" name="login" value="Login">
              <br />
              <div class="register-section">
                <div class="register">
                  <a href="index.php?controller=register&action=add_user">Register</a> 
                  <span>or</span>
                  <a href="#">Forgot Password</a>
                </div>
                <div class="social-buttons">
                  <button class="btn-facebook">
                    <i class="fab fa-facebook-f"></i> Sign in with Facebook
                  </button>
                  <button class="btn-google">
                    <i class="fab fa-google"></i> Sign in with Google
                  </button>
                  <button class="btn-twitter">
                    <i class="fab fa-twitter"></i>Sign in with Twitter
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div id="termsModal" class="modal">
          <div class="modal-content">
            <span class="close">&times;</span>
            <p>
              Các quý vị và các bạn thân mến !!! <br />
              Hôm nay, tôi rất vinh dự được chia sẻ với mọi người về một cuộc
              cách mạng thực sự trong ngành thương mại điện tử - Onix Web, nền
              tảng bán giày trực tuyến với sứ mệnh mang lại trải nghiệm mua sắm
              tuyệt vời nhất cho khách hàng. Khi nhìn vào thế giới ngày nay,
              không thể phủ nhận sự phát triển mạnh mẽ của thương mại điện tử.
              <br />
              Trong một thế giới mà sự tiện lợi và tốc độ trở thành yếu tố quan
              trọng, việc mua sắm trực tuyến đã trở thành một phần không thể
              thiếu của cuộc sống hàng ngày của chúng ta. Và trong hơn một thập
              kỷ qua, Onix Web đã đứng vững và phát triển, trở thành điểm đến
              tin cậy cho những người yêu thời trang giày dép trên toàn thế
              giới. Tại Onix Web, chúng tôi không chỉ là một nền tảng thương mại
              điện tử bình thường. Chúng tôi là một cộng đồng, là nơi mà sự đam
              mê về giày dép được thể hiện và lan tỏa. Với một bộ sưu tập đa
              dạng và phong phú, từ những dòng sản phẩm phổ biến cho đến những
              bản thiết kế độc đáo và cá nhân hóa, chúng tôi cam kết mang lại
              cho khách hàng những trải nghiệm mua sắm không giới hạn và đáng
              nhớ. Điều đặc biệt mà Onix Web mang lại không chỉ là những sản
              phẩm chất lượng và đa dạng mà còn là dịch vụ khách hàng xuất sắc.
              Chúng tôi luôn lắng nghe và đáp ứng nhanh chóng mọi nhu cầu và
              mong muốn của khách hàng. <br />
              Tại Onix Web, mỗi giao dịch không chỉ là việc mua sắm, mà còn là
              một trải nghiệm tương tác và giao tiếp chân thành. Nhưng thành
              công của chúng tôi không chỉ dừng lại ở việc cung cấp sản phẩm và
              dịch vụ tốt. Chúng tôi cũng cam kết đóng góp tích cực vào cộng
              đồng và bảo vệ môi trường. Từ việc sử dụng vật liệu tái chế cho
              đến việc hỗ trợ các chương trình xã hội, chúng tôi không ngừng nỗ
              lực để tạo ra một thế giới tốt đẹp hơn thông qua các hoạt động
              kinh doanh của mình. Và cuối cùng, tôi muốn bày tỏ lòng biết ơn
              sâu sắc đến tất cả những người đã đồng hành cùng chúng tôi trong
              hành trình này - từ đội ngũ nhân viên tận tâm đến những khách hàng
              thân thiết và các đối tác đáng tin cậy. Sứ mệnh của chúng tôi
              không thể được thực hiện nếu thiếu đi sự hỗ trợ và niềm tin từ mọi
              người. Với tinh thần đóng góp và sự sáng tạo không ngừng, chúng
              tôi tin rằng tương lai của Onix Web sẽ tràn đầy hứa hẹn và thành
              công. Chúng tôi sẽ tiếp tục xây dựng và phát triển để mang lại cho
              mọi người những trải nghiệm mua sắm tốt nhất và làm đẹp thế giới
              này một cách tích cực. Cảm ơn các bạn đã lắng nghe. Xin cảm ơn!
            </p>
            <input type="checkbox" id="agreeCheckbox" />
            <label for="agreeCheckbox"
              >Tôi đồng ý với điều khoản và dịch vụ</label
            >
            <button id="confirmButton" disabled>Xác nhận</button>
          </div>
        </div>
      </main>
      <footer>
        <div class="p1">
          <p>Họ và tên: Lê Quốc Huy</p>
          <p>Mã Sinh Viên: 23IT.B075</p>
          <p>Số điện thoại: 0706 163 387</p>
          <p>Địa chỉ: Quảng Đại - Đại Cường - Đại Lộc - Quảng Nam</p>
        </div>
      </footer>
    </div>
  </body>
</html>
