<?php
/*
 Template Name: pay consultation
*/
?>

<?php get_header(); ?>

<div id="content">

    <div id="inner-content" class="wrap cf">

        <div id="main" class="m-all t-2of3 cf home-page-content" role="main" style="margin-bottom: 30px; text-align: center;">
        <?php $curr_user = wp_get_current_user(); ?>
            <h1 class="page-title" itemprop="headline" style="text-align: center"><?php the_title(); ?></h1>

            <div>
                <?=$post->post_content?>
            </div>

            <form action="http://sprypay.ru/sppi/" method="POST" class="pay-form">
                <input type="hidden" name="spPurpose" value="Опалата консультации. WizardMachine">
                <input type="hidden" name="spAmount" value="25000.00">
                <input type="hidden" name="spShopId" value="221915">
                <!--<input type="hidden" name="spShopPaymentId" value="ваш номер платежа">-->
                <input type="hidden" name="spCurrency" value="rur">
                <!--<input type="hidden" name="spUserDataUserId" value="<?=$curr_user->ID?>">-->
                <!--<input type="hidden" name="spIpnUrl" value="http://some.site.ru/ipn.script.php">-->
                <!--<input type="hidden" name="spIpnMethod" value="1">-->
                <input type="hidden" name="spSuccessUrl" value="<?=site_url('pay_success')?>">
                <input type="hidden" name="spSuccessMethod" value="1">
                <input type="hidden" name="spFailUrl" value="<?=site_url('pay_error')?>">
                <input type="hidden" name="spFailMethod" value="1">
                <input type="hidden" name="lang" value="ru">
                <input type="email" required="required" name="spUserEmail" class="pay-form__email" placeholder="Введите свой E-mail">
                <input type="submit" value="оплатить" class="pay-form__submit">
              </form>

        </div>

    </div>

</div>


<?php get_footer(); ?>
