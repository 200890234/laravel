<?
if(!defined('InEmpireCMS'))
{exit();}
?><? include("../../data/template/cp_1.php");?><div class="feedback">
                            <form name='feedback' method='post' enctype='multipart/form-data' action='../../enews/index.php'>
                                <input name='enews' type='hidden' value='AddFeedback'>
                                <input name='info_id' type='hidden' value='<?php echo $_GET["info_id"]; ?>'>
                                <input name='info_url' type='hidden' value='<?php echo $_GET["info_url"]; ?>'>
                                <ul>
                                    <li><input type="text" class="comment_box2 form-control" name="name" placeholder="姓名/昵称"></li>
                                    <li><input type="text" class="comment_box2 form-control" name="email" placeholder="联系邮箱(必填)"></li>
                                    <li><input type="text" class="comment_box2 form-control" name="tel" placeholder="联系电话"></li>
                                    <li><input type="text" class="comment_box2 form-control" name="title" placeholder="标题"></li>
                                    <li><textarea name="saytext" id="saytext" class="form-control" placeholder="详细说明(必填)"></textarea></li>
                                    <li class="li_feedsub" style="padding-bottom:10px;"><input type="submit" name="submit" class="feedback_submit" value="提  交"></li>
                                </ul>
                            </form>
                        </div><? include("../../data/template/cp_2.php");?>