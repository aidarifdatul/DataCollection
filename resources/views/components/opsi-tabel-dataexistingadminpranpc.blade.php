<div class="d-flex justify-content-left align-items-center gap-2">
    <a href="{{ route('edit-existingsadminpranpc', ['id' => $existing->id]) }}"
        class="btn border border-0 d-flex align-items-center">
        <div class="text-blue">
            <i class="bi bi-pencil-square fs-5"></i>
        </div>
    </a>
    <!-- Button trigger modal -->
    @if ($existing->status_pembayaran !== 'Paid' && $existing->status_pembayaran !== 'Pending')
        <button type="button" class="btn border border-0 d-flex align-items-center" data-bs-toggle="modal"
            data-bs-target="#exampleModal{{ $existing->id }}">
            <div class="text-green">
                <i class="bi bi-file-earmark-pdf-fill fs-5"></i>
            </div>
        </button>
    @endif

    <!-- Modal -->
    <div class="modal fade" id="exampleModal{{ $existing->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Masukkan Nomor Surat</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="pdfForm{{ $existing->id }}"
                        action="{{ route('existingadminpranpc.pdf', ['id' => $existing->id]) }}" method="GET">
                        <div class="mb-3">
                            <label for="nomorSurat" class="form-label fw-bold">Nomor Surat</label>
                            <input type="text" class="form-control" id="nomorSurat" name="nomor_surat" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-grey" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-secondary" form="pdfForm{{ $existing->id }}">Download
                        PDF</button>
                </div>
            </div>
        </div>
    </div>
</div>
