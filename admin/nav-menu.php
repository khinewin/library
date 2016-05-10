<li><a href="home"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
<li><a href="books"><span class="glyphicon glyphicon-bullhorn"></span> Books</a></li>
<li><a href="categories"><span class="glyphicon glyphicon-list"></span> Category</a></li>


<li>


    <a href="user?id=<?php echo $_SESSION['auth'] ?>"><span class="glyphicon glyphicon-user"></span>
        <?php $result=mysql_query("SELECT * FROM admins");
        while($user=mysql_fetch_array($result)): ?>

            <?php if($_SESSION['auth']==$user['id']) echo $user['name'] ?>
        <?php endwhile; ?>
            </a>
            </li>
        <li>
            <a href="post/logout"><span class="glyphicon glyphicon-log-out"></span> Logout </a>
        </li>

