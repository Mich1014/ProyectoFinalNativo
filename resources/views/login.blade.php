<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Formulario</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="hero">
  <div class="container">
    <div class="column">
      <h1>Bienvenidos a Nativo</h1>
      <p>Donde encontrarás <a href="#">las mejores especias</a> con la mejor calidad.</p>
    </div>
    <div class="column">
      <div class="wv-tabs">
        <div class="wv-tabs-header">
          <div class="wv-tabs-header__tab wv-tabs-header__tab--active" data-tab="1">Regístrate</div>
          <div class="wv-tabs-header__tab" data-tab="2">Inicia Sesión</div>
        </div>
        <div class="wv-tabs-content">
          <div class="wv-tabs-content__panel wv-tabs-content__panel--active" data-tab="1">
            <div class="wv-button-group">
              <button class="wv-button wv-button--facebook"><i class="fa fa-facebook"></i><span>Facebook</span></button>
              <button class="wv-button wv-button--twitter"><i class="fa fa-twitter"></i><span>Twitter</span></button>
              <button class="wv-button wv-button--Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></i>Instagram</span></button>
              <button class="wv-button wv-button--google"><i class="fa fa-google"></i><span>Google</span></button>
            </div>
            <div class="wv-divider"></div>
            <form class="wv-form">
              <input class="wv-input" type="email" placeholder="Nombre y apellido"/>
              <input class="wv-input" type="email" placeholder="Correo electrónico"/>
              <input class="wv-input" type="password" placeholder="Contraeña"/>
              <button class="wv-button" type="submit"><span>Regístrate</span></button>
            </form>
          </div>
          <div class="wv-tabs-content__panel" data-tab="2">
            <div class="wv-button-group wv-button-group--developer">
              <button class="wv-button wv-button--github"><i class="fa fa-instagram" aria-hidden="true"></i><span>Instagram</span></button>
              <button class="wv-button wv-button--facebook"><i class="fa fa-facebook"></i><span>Facebook</span></button>
              <button class="wv-button wv-button--twitter"><i class="fa fa-twitter"></i><span>Twitter</span></button>
              <button class="wv-button wv-button--google"><i class="fa fa-google"></i><span>Google</span></button>
            </div>
            <div class="wv-divider"></div>
            <form class="wv-form">
              <input class="wv-input" type="email" placeholder="Correo electrónico"/>
              <input class="wv-input" type="password" placeholder="Contraseña"/>
              <button class="wv-button" type="submit"><span>Inicia Sesión</span></button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://codepen.io/andytran/pen/vLmRVp.js'></script><script  src="./script.js"></script>
<style>
  body {
  background: #F3F3F3;
  width: 100%;
  height: 100%;
  font-family: "Montserrat";
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

.wv-tabs {
  z-index: 1;
  position: relative;
  background: #FFF;
  width: 400px;
  border-radius: 4px;
  overflow: hidden;
}
.wv-tabs-header {
  display: flex;
  flex-direction: row;
  flex-wrap: nowrap;
  align-items: center;
}
.wv-tabs-header__tab {
  background: #DD3E48;
  width: 100%;
  padding: 20px;
  color: #FFF;
  font-size: 16px;
  text-align: center;
  cursor: pointer;
}
.wv-tabs-header__tab--active {
  background: #FFF;
  color: #F0525C;
}
.wv-tabs-content__panel {
  display: none;
  background: #FFF;
}
.wv-tabs-content__panel--active {
  display: block;
}
.wv-button-group {
  display: flex;
  flex-wrap: wrap;
  padding: 13px 23px;
}
.wv-button-group .wv-button {
  width: calc(50% - 14px);
  margin: 7px;
  padding: 12px 20px;
  text-align: left;
}
.wv-button-group--developer .wv-button {
  width: calc(33% - 14px);
  text-align: center;
}
.wv-button-group--developer .wv-button .fa {
  margin: 0;
}
.wv-button-group--developer .wv-button span {
  display: none;
}
.wv-button-group--developer .wv-button--github {
  width: 100%;
}
.wv-button-group--developer .wv-button--github .fa {
  margin: 0 10px 0 0;
}
.wv-button {
  display: block;
  background: #94F04D;
  width: 100%;
  border: 0;
  border-radius: 4px;
  padding: 15px 20px;
  box-sizing: border-box;
  color: #FFF;
  font-family: "Montserrat";
  font-size: 14px;
  line-height: normal;
  text-align: center;
  cursor: pointer;
}
.wv-button .fa {
  background: #FFF;
  width: 24px;
  height: 24px;
  border-radius: 100%;
  margin: 0 10px 0 0;
  line-height: 24px;
  text-align: center;
}
.wv-button--facebook {
  background: #3B5998;
}
.wv-button--facebook .fa {
  color: #3B5998;
}
.wv-button--instagram {
  background: #94F04D;
}
.wv-button--instagram .fa {
  color: #333333;
}
.wv-button--google {
  background: #DB4437;
}
.wv-button--google .fa {
  color: #DB4437;
}
.wv-button--twitter {
  background: #55ACEE;
}
.wv-button--twitter .fa {
  color: #55ACEE;
}
.wv-divider {
  position: relative;
  background: rgba(0, 0, 0, 0.1);
  width: 100%;
  height: 1px;
  margin: 20px 0;
}
.wv-divider:before {
  content: "OR";
  position: absolute;
  left: 50%;
  top: -50%;
  background: #FFF;
  padding: 0 15px;
  transform: translate(-50%, -50%);
  color: #7E7E7E;
  font-size: 14px;
}
.wv-form {
  margin: -10px 0 0;
  padding: 30px;
}
.wv-input {
  display: block;
  background: #F3F3F3;
  width: 100%;
  border: 0;
  border-radius: 4px;
  margin: 0 0 14px;
  padding: 15px 20px;
  box-sizing: border-box;
  color: #212121;
  font-family: "Montserrat";
  font-size: 14px;
  line-height: normal;
  text-align: center;
}

.hero {
  z-index: 1;
  position: relative;
  background: #94F04D;
  min-width: 440px;
  margin: 20px 20px 100px;
  padding: 40px 0;
  box-sizing: border-box;
}

.container {
  display: flex;
  align-items: center;
  flex-direction: row;
  flex-wrap: no-wrap;
  justify-content: space-between;
  max-width: 1140px;
  margin: 0 auto;
  padding: 0 20px;
  box-sizing: border-box;
}
.container .column {
  height: 100%;
  padding: 20px;
}

h1 {
  margin: 0 0 20px;
  color: #FFF;
  font-size: 48px;
  font-weight: 700;
  line-height: 1.4em;
}

p {
  color: #FFF;
  font-family: "Roboto";
  font-weight: 400;
  line-height: 1.4em;
}
p a {
  color: #FFD800;
  font-weight: 600;
  text-decoration: none;
}

.wv-tabs {
  margin: 0 0 -160px;
}

@media (max-width: 980px) {
  .container {
    flex-direction: column;
    flex-wrap: wrap;
  }
}
@media (max-width: 760px) {
  h1, p {
    text-align: center;
  }

  h1 {
    font-size: 40px;
  }

  p {
    width: 80%;
    margin: 0 auto;
  }
}
</style>
<script>
    (function() {
  $('.wv-tabs-header__tab').on('click', function(e) {
    var tabId;
    e.preventDefault();
    $('.wv-tabs-header__tab').removeClass('wv-tabs-header__tab--active');
    $(this).addClass('wv-tabs-header__tab--active');
    tabId = $(this).attr('data-tab');
    $('.wv-tabs-content__panel').removeClass('wv-tabs-content__panel--active');
    return $('.wv-tabs-content__panel[data-tab="' + tabId + '"]').addClass('wv-tabs-content__panel--active');
  });

}).call(this);

//# sourceMappingURL=data:application/json;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiIiwic291cmNlUm9vdCI6IiIsInNvdXJjZXMiOlsiPGFub255bW91cz4iXSwibmFtZXMiOltdLCJtYXBwaW5ncyI6IkFBQUE7RUFBQSxDQUFBLENBQUUsc0JBQUYsQ0FBeUIsQ0FBQyxFQUExQixDQUE2QixPQUE3QixFQUFzQyxRQUFBLENBQUMsQ0FBRCxDQUFBO0FBQ3RDLFFBQUE7SUFBRSxDQUFDLENBQUMsY0FBRixDQUFBO0lBRUEsQ0FBQSxDQUFFLHNCQUFGLENBQXlCLENBQUMsV0FBMUIsQ0FBc0MsNkJBQXRDO0lBRUEsQ0FBQSxDQUFFLElBQUYsQ0FBTyxDQUFDLFFBQVIsQ0FBaUIsNkJBQWpCO0lBRUEsS0FBQSxHQUFRLENBQUEsQ0FBRSxJQUFGLENBQU8sQ0FBQyxJQUFSLENBQWEsVUFBYjtJQUVSLENBQUEsQ0FBRSx5QkFBRixDQUE0QixDQUFDLFdBQTdCLENBQXlDLGdDQUF6QztXQUVBLENBQUEsQ0FBRSxvQ0FBQSxHQUF1QyxLQUF2QyxHQUErQyxJQUFqRCxDQUFzRCxDQUFDLFFBQXZELENBQWdFLGdDQUFoRTtFQVhvQyxDQUF0QztBQUFBIiwic291cmNlc0NvbnRlbnQiOlsiJCgnLnd2LXRhYnMtaGVhZGVyX190YWInKS5vbiAnY2xpY2snLCAoZSkgLT5cbiAgZS5wcmV2ZW50RGVmYXVsdCgpXG4gIFxuICAkKCcud3YtdGFicy1oZWFkZXJfX3RhYicpLnJlbW92ZUNsYXNzICd3di10YWJzLWhlYWRlcl9fdGFiLS1hY3RpdmUnXG4gIFxuICAkKHRoaXMpLmFkZENsYXNzICd3di10YWJzLWhlYWRlcl9fdGFiLS1hY3RpdmUnXG4gIFxuICB0YWJJZCA9ICQodGhpcykuYXR0ciAnZGF0YS10YWInXG4gIFxuICAkKCcud3YtdGFicy1jb250ZW50X19wYW5lbCcpLnJlbW92ZUNsYXNzICd3di10YWJzLWNvbnRlbnRfX3BhbmVsLS1hY3RpdmUnXG4gIFxuICAkKCcud3YtdGFicy1jb250ZW50X19wYW5lbFtkYXRhLXRhYj1cIicgKyB0YWJJZCArICdcIl0nKS5hZGRDbGFzcyAnd3YtdGFicy1jb250ZW50X19wYW5lbC0tYWN0aXZlJyJdfQ==
//# sourceURL=coffeescript
</script>
</body>
</html>
