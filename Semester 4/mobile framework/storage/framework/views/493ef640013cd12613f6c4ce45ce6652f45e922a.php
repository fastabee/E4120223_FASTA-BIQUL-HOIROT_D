<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-6 mt-4 mb-2">
            <a href="<?php echo e(route('transaksi.create')); ?>" class="btn btn-secondary ">Tambah Transaksi</a>
        </div>
        <div class="col-md-6 mt-4 mb-3 d-flex justify-content-end">
            <!-- Search form -->
            <form  action="<?php echo e(route('transaksi.search')); ?>" method="get" class="navbar-search navbar-search-light form-inline mr-sm-3 " id="navbar-search-main">

              <input type="text" placeholder="masukkan kode transaksi" class="form-control bg-white <?php $__errorArgs = ['q'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="q" autocomplete="off" autofocus>
             <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
  
          </form>
      </div>
    </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <!-- Card header -->
                    <div class="card-header border-0">
                        <h3 class="my-3 text-center"><?php echo e($title); ?></h3>
                        <div class="success" data-flash="<?php echo e(session()->get('success')); ?>"></div>
                        <div class="fail" data-flash="<?php echo e(session()->get('fail')); ?>"></div>
                        <div class="hapus" data-flash="<?php echo e(session()->get('success')); ?>"></div>
                    </div>
                    <!-- Light table -->
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="sort" data-sort="Nama">Nama</th>
                                    <th scope="col" class="sort" data-sort="Nim">Nim</th>
                                    <th scope="col" class="sort" data-sort="Kode Transaksi">Kode Transaksi</th>
                                    <th scope="col" class="sort" data-sort="Tanggal Pinjam">Tanggal Pinjam</th>
                                    <th scope="col" class="sort" data-sort="Tanggal Kembali">Tanggal Kembali</th>
                                    <th scope="col" class="sort" data-sort="Status">Status</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                <?php $__currentLoopData = $transaksi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                    <tr>
                                        <th scope="row">
                                            <div class="media align-items-center">
                                                <div class="media-body">
                                                    <span class="name mb-0 text-sm"><?php echo e($item->anggota->nama); ?></span>
                                                </div>
                                            </div>
                                        </th>
                                        <td class="budget">
                                            <?php echo e($item->anggota->nim); ?>

                                        </td>
                                        <td>
                                            
                                                <span class="status"><?php echo e($item->kode_transaksi); ?></span>
                                            
                                        </td>
                                        <td>
                                            <?php echo e($item->tgl_pinjam); ?>

                                        </td>
                                        <td>
                                            <?php echo e($item->tgl_kembali); ?>

                                        </td>
                                        <td>
                                            <?php if($item->status == 'pinjam'): ?>
                                                <span class="badge badge-dot mr-4">
                                                    <i class="bg-danger"></i>
                                                    <span><?php echo e($item->status); ?></span>
                                                </span>
                                            <?php else: ?> 
                                                <span class="badge badge-dot mr-4">
                                                    <i class="bg-success"></i>
                                                    <span><?php echo e($item->status); ?></span>
                                                </span>
                                            <?php endif; ?>
                                        
                                        </td>

                                        <td class="text-right">
                                            <div class="dropdown">
                                                <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-ellipsis-v"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                                    <button class="dropdown-item btn-detail" data-target="#detailTransaksi" data-toggle="modal" data-id="<?php echo e($item->id); ?>" >Detail</button>

                                                    <?php if($item->status == 'pinjam'): ?>  
                                                        <button class="dropdown-item btn-edit" data-toggle="modal" data-target="#editTransaksi" data-id="<?php echo e($item->id); ?>">Edit</button>
                                                    <?php endif; ?>
                                                    
                                                    <?php if($item->status == 'kembali'): ?>
                                                    
                                                        <form action="<?php echo e(route('transaksi.destroy', $item->id)); ?>" method="post"
                                                            id="delete<?php echo e($item->id); ?>">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('delete'); ?>
                                                                <button class="dropdown-item" type="button"
                                                                onclick="deleteTransaksi(<?php echo e($item->id); ?>)">Hapus</button>
                                                        </form>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </tbody>
                        </table>
                    </div>
                    <!-- Card footer -->
                    <div class="card-footer py-4">
                        <nav aria-label="...">

                            
                            <?php if($transaksi->lastPage() != 1): ?>
                                <ul class="pagination justify-content-end mb-0">
                                    <li class="page-item">
                                        <a class="page-link" href="<?php echo e($transaksi->previousPageUrl()); ?>" tabindex="-1">
                                            <i class="fas fa-angle-left"></i>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <?php for($i = 1; $i <= $transaksi->lastPage(); $i++): ?>
                                        <li class="page-item <?php echo e($i == $transaksi->currentPage() ? 'active' : ''); ?>">
                                            <a class="page-link" href="<?php echo e($transaksi->url($i)); ?>"><?php echo e($i); ?></a>
                                        </li>
                                    <?php endfor; ?>
                                    <li class="page-item">
                                        <a class="page-link" href="<?php echo e($transaksi->nextPageUrl()); ?>">
                                            <i class="fas fa-angle-right"></i>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            <?php endif; ?>

                            <?php if(count($transaksi) == 0): ?>
                                <div class="text-center"> Tidak ada data!</div>
                            <?php endif; ?>

                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('modal'); ?>

     
     <div class="modal fade" id="editTransaksi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content  mt-5">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Transaksi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
            </div>
        </div>
     </div>
    
    
    <div class="modal fade" id="detailTransaksi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content  mt-5">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detail Transaksi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
            </div>
        </div>
     </div>
        
    
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script'); ?>
    <script>

        // modal edit transaksi 
        $('.btn-edit').click(function(){
            let id = $(this).data('id');
            $.ajax({
                url : `http://localhost:8000/transaksi/${id}/edit`,
                method :'GET',
                success:function(data){
                    $('#editTransaksi').find('.modal-body').html(data);
                    $('#editTransaksi').show();
                }
            });
        })
        // modal detail transaksi 
        $('.btn-detail').click(function(){
            let id = $(this).data('id');
            $.ajax({
                url : `http://localhost:8000/transaksi/${id}`,
                method :'GET',
                success:function(data){
                    $('#detailTransaksi').find('.modal-body').html(data);
                    $('#detailTransaksi').show();
                }
            });
        })

         //sweetalert delete
        function deleteTransaksi(id){
            Swal.fire({
                title: 'PERINGATAN!',
                text: "Yakin ingin menghapus Transaksi?",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes',
                cancelButtonText: 'Cancle',
            }).then((result) => {
                if (result.value) {
                    $('#delete' + id).submit();
                }
            })
        }
        $(document).ready(function(){


           
            //session success dan berhasil hapus
            let success =  $('.success').data('flash');
            if (success) {
                Swal.fire({
                    position: 'center',
                    type: 'success',
                    title: success,
                    showConfirmButton: false,
                    timer: 2000
                });
            }
            
            //session gagal meminjam
            let fail =  $('.fail').data('flash');
            if (fail) {
                Swal.fire({
                    position: 'center',
                    type: 'warning',
                    title: fail,
                    showConfirmButton: true,
                    // timer: 2000
                });
            }
        })
    </script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\kuliah\Laravel\perpustakaan_laravel-main\resources\views/transaksi/index.blade.php ENDPATH**/ ?>