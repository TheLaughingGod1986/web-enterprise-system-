    <!--    /////////////////////START SHOW COMMENTS//////////////////-->
    <h1>Full Report Place Here</h1>
    <?= form_open('main/add_old_report'); ?>

    <?= form_hidden('ReportID', $this->uri->segment(3)); ?>

    <button type="submit" value="read report" class="btn btn-danger">Old Report/Mark as Read</button>

    </form>
    <?php
    if ($this->session->flashdata('messagethree')) {
        ?>
        <div class="message flash">
            <?php echo $this->session->flashdata('messagethree'); ?>
        </div>
        <?php
    }
    ?>
    <h2>comments</h2>
    <table class="table table-hover">
        <thead>
        <tr style="background: #F7F2D9; text-align: center;">
            <th><h4>UserName</h4></th>
            <th><h4>Date Made</h4></th>
        </tr>
        </thead>
        <tbody>

        <?php if (isset($reports)) :
        foreach ($reports as $row) : ?>
        </tbody>
        <tr style="background-color: rgba(152, 18, 18, 0.39); text-align: center;">
            <td><b>
                   <?php
                        echo $row->Username;
                        echo $row->Staff_Username;
                   ?>
                </b></td>
            <td><b><?php echo $row->Comment_Date; ?></b></td>
            </tr>
        <tr>
            <td colspan="2"><h4>Comment</h4></td>
        </tr>
        <tr>
            <td colspan="2"><p><?php echo $row->Comments; ?></p></td>
        </tr>

    <?php endforeach; ?>
    </table>

    <?php else : ?>
        <p>No Comments</p>
    <?php endif; ?>

    <p><?= anchor('main', 'Back home'); ?></p>
    <!--    /////////////////////END SHOW COMMENTS//////////////////-->

    <!--    /////////////////////START ADD COMMENT FORM//////////////////-->
    <div class="col-sm-4">
    <?= form_open('main/comment_add'); ?>

    <?= form_hidden('ReportID', $this->uri->segment(3)); ?>

    <p><textarea name="Comments" rows="10"></textarea></p>
    <p><input type="submit" value="add comment"/></p>

    <?php
    if ($this->session->flashdata('messagetwo')) {
        ?>
        <div class="message flash">
            <?php echo $this->session->flashdata('messagetwo'); ?>
        </div>
        <?php
    }
    ?>
    </form>
    <!--    /////////////////////END ADD COMMENT FORM//////////////////-->

</div>

