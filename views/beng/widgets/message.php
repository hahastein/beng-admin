<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="icon-note"></i>
        <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
    </a>
    <div class="dropdown-menu mailbox dropdown-menu-right animated bounceInDown" aria-labelledby="2">
        <ul>
            <li>
                <div class="drop-title">您有1个未读<?=$title?></div>
            </li>
            <?php if ($dataSet): ?>
            <li>
                <div class="message-center">
                    <?php foreach ($dataSet as $item): ?>
                    <!-- Message -->
                    <a href="javascript:void(0)">
                        <div class="user-img"> <img src="../assets/images/users/1.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                        <div class="mail-contnet">
                            <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                    </a>
                    <?php endforeach; ?>
                </div>
            </li>
            <li>
                <a class="nav-link text-center link" href="javascript:void(0);"> <strong>查看所有 <?=$title?></strong> <i class="fa fa-angle-right"></i> </a>
            </li>
            <?php else: ?>
            <li>
                <div class="p-10 text-center">
                    士大夫速度
                </div>
            </li>
            <?php endif; ?>
        </ul>
    </div>
</li>