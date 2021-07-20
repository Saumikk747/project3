<link href="<?php echo base_url('assets/plugins/datatables/dataTables.bootstrap.css')?>" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function areyousure()
{
	return confirm('<?php echo lang('are_you_sure');?>');
}
</script>
<section class="content-header">
        <h1>
            <?php echo $page_title; ?>
            <small><?php echo lang('list');?></small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="<?php echo site_url('admin')?>"><i class="fa fa-dashboard"></i> <?php echo lang('dashboard');?></a></li>
            <li class="active"><?php echo lang('case_study');?></li>
        </ol>
</section>

<section class="content">
  	  	 <div class="row" style="margin-bottom:10px;">
            <div class="col-xs-12">
                <div class="btn-group pull-right">
				<?php if(check_user_role(162)==1){?>	
                    <a class="btn btn-default" href="<?php echo site_url('admin/case_study/add/'); ?>"><i class="fa fa-plus"></i> <?php echo lang('add_new');?></a>
				<?php } ?>	
                </div>
            </div>    
        </div>	
        
  	  	<div class="row">
          <div class="col-xs-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title"><?php echo lang('case_study');?></h3>                                    
                </div><!-- /.box-header -->
				
                <div class="box-body table-responsive" >
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th><?php echo lang('serial_number');?></th>
								<th><?php echo lang('title');?></th>
								
								<th width="20%"><?php echo lang('action');?></th>
                            </tr>
                        </thead>
                        
                        <?php if(isset($case_study)):?>
                        <tbody>
                            <?php $i=1;foreach ($case_study as $new){?>
                                <tr class="gc_row">
                                    <td><?php echo $i?></td>
                                    <td><?php echo $new->title?></td>
									 <td class="col-md-5">
                                        <div class="btn-group">
										<?php if(check_user_role(172)==1){?>	
                            			  <a class="btn btn-info"  href="<?php echo site_url('admin/case_study/attachments/'.$new->id); ?>"><i class="fa fa-tags"></i> <?php echo lang('attachments');?></a>
										  <?php } ?>
										  <?php if(check_user_role(165)==1){?>	
										  <a class="btn btn-default"  style="margin-left:8px;" href="<?php echo site_url('admin/case_study/view/'.$new->id); ?>"><i class="fa fa-eye"></i> <?php echo lang('view');?></a>
										  <?php } ?>
										    <?php if(check_user_role(163)==1){?>	
										  <a class="btn btn-primary"  style="margin-left:8px;" href="<?php echo site_url('admin/case_study/edit/'.$new->id); ?>"><i class="fa fa-edit"></i> <?php echo lang('edit');?></a>
										  <?php } ?>
										  <?php if(check_user_role(164)==1){?>	
										 <a class="btn btn-danger" style="margin-left:8px;" href="<?php echo site_url('admin/case_study/delete/'.$new->id); ?>" onclick="return areyousure()"><i class="fa fa-trash"></i> <?php echo lang('delete');?></a>
										 <?php } ?>
                                        </div>
                                    </td>
                                </tr>
                                <?php $i++;}?>
                        </tbody>
                        <?php endif;?>
                    </table>
					
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div>
    </div>
</section>

<script src="<?php echo base_url('assets/plugins/datatables/jquery.dataTables.js')?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/plugins/datatables/dataTables.bootstrap.js')?>" type="text/javascript"></script>
<script type="text/javascript">
$(function() {
	$('#example1').dataTable({
	});
});

</script>