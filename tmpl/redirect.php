<?php
/**
 * @package      CrowdfundingPayment
 * @subpackage   Plugins
 * @author       Todor Iliev
 * @copyright    Copyright (C) 2017 Todor Iliev <todor@itprism.com>. All rights reserved.
 * @license      GNU General Public License version 3 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
/**
 * @var stdClass $item
 * @var Joomla\Registry\Registry $componentParams
 */
?>
<div class="row">
    <div class="col-md-12">
        <p class="bg-info p-5">
            <span class="fa fa-info-circle"></span>
            <?php echo JText::_('PLG_CROWDFUNDINGPAYMENT_LOGIN_YOU_ARE_SIGNED_NOT_REDIRECTED');?>
        </p>
        <form action="<?php echo JRoute::_('index.php?option=com_crowdfunding&task=backing.process'); ?>" method="post">
            <input type="hidden" name="id" value="<?php echo (int)$item->id; ?>" />
            <input type="hidden" name="rid" value="<?php echo (int)$this->rewardId; ?>" />
            <input type="hidden" name="amount" value="<?php echo (float)$this->amount; ?>" />

            <?php if ($componentParams->get('backing_terms', 0) and !empty($this->terms)) { ?>
            <input type="hidden" name="terms" value="1" />
            <?php } ?>

            <?php echo JHtml::_('form.token'); ?>

            <button type="submit" class="btn btn-primary">
                <?php echo JText::_('PLG_CROWDFUNDINGPAYMENT_LOGIN_NEXT_STEP');?>
            </button>
        </form>
    </div>
</div>

