<div class="navbar">
<a href="home.php" id="linkHome">Blog&Todo</a>  
    <ul> 
        <li>
        <a class="linkStates" href="home.php">Home</a>
        </li>
        <li>
        <a class="linkStates" href="todoUI.php">Todo</a>
        </li>
        <li>
        <a class="linkStates" href="blog.php">Blog</a>
        </li>
        <?php if (isset($_SESSION['user'])) : ?>
            
        <li>
        <a class="linkStates" href="post.php">Post</a>
        </li>
        <li>
        <a class="linkStates" href="logout.php">Logout</a>
        </li>
        <?php else : ?>
        <li>
        <a class="linkStates" href="login.php">Login</a>
        </li>
        <?php endif ?>
    </ul>
        <a id="myName">Designed By: 2K18/CSM/01</a>
</div>

