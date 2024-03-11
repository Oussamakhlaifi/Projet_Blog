<div>
    <nav>
        <ul class="menu">
            <li class="elem_menu">
                <a href="index.php">blog</a>
            </li>
            <?php 
                if(isset($_SESSION['user'])  ): ?>
                <li class="elem_menu">
                <a href="admin.php">administration du blog </a>
                </li>
                
            <?php endif; ?>
            
        </ul>
    </nav>
</div>

<style>
  .elem_menu{
    list-style:none;
    display:inline-block;
  }
  .menu{
 
  }
</style>