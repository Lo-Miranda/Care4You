<?php include('layout\header.php'); ?>
<?php include_once('..\model\dbcon.php')?> 


  <div class="container-fluid" style="border-radius: 20px;">
    <div class="row" style="padding-top: 15%;">
      <div class="col-md-12">
        <div class="col-md-12">            
        
          <?php
          session_start();
          if (isset($_SESSION['error'])) {
              echo '<div class="alert alert-danger">' . $_SESSION['error'] . '</div>';
              unset($_SESSION['error']); 
          }
          ?>
        
          <!-- Formulário de login -->
          <form id="myForm" action="../controller/login_controller.php" method="POST">
          <h2>Olá!</h2>
          <h6>Faça seu login</h6>
            <div class="row">
              <div class="col-md-12" style="font-size: 14px; font-weight: 200; padding: 10px 60px 10px 40px;">
              <input type="email" name="email" placeholder="Digite seu e-mail" class="form-control" required style="font-size: 1.2em;">
              </div>
              <div class="col-md-12" style="font-size: 14px; font-weight: 200; padding: 40px 60px 60px 40px;">
              <input type="password" name="senha" placeholder="Digite sua senha" class="form-control" required style="font-size: 1.2em;">
              </div>
            </div>
            <div class="col-md-12" style="text-align: center; padding-bottom: 45px;">
    <button type="submit" class="btn btn-dark" style="padding: 5px 15px;">ENTRAR</button>
</div>
          </form>
        </div>
      </div>
    </div>
  </div>


  <?php include('layout/footer.php'); ?>

   
