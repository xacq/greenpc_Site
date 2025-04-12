<!-- Reproductor de Audio -->
<section class="mb-5">
    <div class="card border-0 shadow-sm">
        <div class="card-body p-4">
            <div class="d-flex flex-column flex-md-row align-items-center">
                <!-- Imagen/Icono del audio -->
                <div class="me-md-4 mb-3 mb-md-0 text-center">
                    <div class="position-relative" style="width: 80px; height: 80px;">   
                    <img src="<?= htmlspecialchars($audioImage) ?>" 
                             alt="<?= htmlspecialchars($audioTitle) ?>" 
                             class="img-fluid rounded-circle w-100 h-100 object-fit-cover">
                    </div>
                </div>
                
                <!-- Controles del reproductor -->
                <div class="flex-grow-1 w-100">
                    <h3 class="h5 mb-2"><?= htmlspecialchars($audioTitle) ?></h3>
                    <div class="d-flex flex-column">
                        <!-- Barra de progreso clickeable -->
                        <div class="progress mb-2 progress-container" style="height: 6px; cursor: pointer;">
                            <div class="progress-bar bg-primary progress-bar-audio" 
                                 role="progressbar" 
                                 style="width: 0%" 
                                 aria-valuenow="0" 
                                 aria-valuemin="0" 
                                 aria-valuemax="100"></div>
                        </div>
                        
                        <!-- Controles y tiempo -->
                        <div class="d-flex justify-content-between align-items-center">
                            <span class="small text-muted audio-current-time">0:00</span>
                            <div class="d-flex gap-3">
                                <button class="btn btn-sm btn-primario btn-audio-play-pause rounded-circle" style="width: 40px; height: 40px;">
                                    <i class="bi bi-play-fill"></i>
                                </button>
                            </div>
                            <span class="small text-muted audio-duration"><?= $audioDuration ?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>