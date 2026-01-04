<div class="form-group">
   <?php if(isset($_SESSION['error'])): ?>
       <div class="alert alert-danger fade show" role="alert">
          <?php echo $_SESSION['error']; ?>
          <?php unset($_SESSION['error']); ?>
       </div>
      <?php endif; ?>
     <form action="create.php" method="post">
           <div class="form-group">
              <label class="form-label" for="simpleinput">Email</label>
               <input name="email" type="text" id="simpleinput" class="form-control">
           </div>

        <label class="form-label" for="simpleinput">Password</label>
        <input name="password" type="password" id="simpleinput" class="form-control">
        <button type="submit" class="btn btn-success mt-3">Зарегистрировать</button>
    </form>
</div>
