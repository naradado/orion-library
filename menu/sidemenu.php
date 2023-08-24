<nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="./" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
         
          <li class="nav-item">
            <a href="#" class="nav-link">
			  <i class="nav-icon fas fa-book"></i>
              <p> Books
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
			<?php if(($roll_id==2)OR($roll_id==1)){?>
              <li class="nav-item">
                <a href="index.php?page=add-book" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
				  
                  <p>Add Book</p>
                </a>
			</li><?php } ?>
              <li class="nav-item">
                <a href="index.php?page=view-book" class="nav-link">
                  <i class="fas fa-book-open nav-icon"></i>
                  <p>View Book</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?page=delete-book" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Delete Book</p>
                </a>
              </li>
            </ul>
          </li>
 
        </ul>
      </nav>