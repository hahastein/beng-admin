<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="icon-note"></i>
        <?php if($count > 0): ?>
        <div class="notify">
            <span class="heartbit"></span>
            <span class="point"></span>
        </div>
        <?php endif; ?>
    </a>
    <div class="dropdown-menu mailbox dropdown-menu-right animated bounceInDown" aria-labelledby="2">
        <ul>
            <li>
                <div class="drop-title">
                    <?php if($count > 0): ?>
                        您有<?=$count?>个未读<?=$title?>
                    <?php else: ?>
                        没有未读消息
                    <?php endif; ?>
                </div>
            </li>
            <?php if ($dataSet): ?>
            <li>
                <div class="message-center">
                    <?php foreach ($dataSet as $item): ?>
                    <!-- Message -->
                    <a href="javascript:void(0)">
                        <div class="user-img">
                            <img src="../assets/images/users/1.jpg" alt="user" class="img-circle">
                            <span class="profile-status online pull-right"></span>
                        </div>
                        <div class="mail-contnet">
                            <h5>Pavan kumar</h5>
                            <span class="mail-desc">Just see the my admin!</span>
                            <span class="time"><?=date('Y-m-d', $item['createtime'])?></span>
                        </div>
                    </a>
                    <?php endforeach; ?>
                </div>
            </li>
            <li>
                <a class="nav-link text-center link" href="javascript:void(0);"> <strong>查看所有 <?=$title?></strong> <i class="fa fa-angle-right"></i> </a>
            </li>
            <?php else: ?>
            <li>
                <div class="p-20 text-center">
                    <i class="fa fa-bullseye"></i> 暂时没有新消息
                </div>
            </li>
            <?php endif; ?>
        </ul>
    </div>
</li>