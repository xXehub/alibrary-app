    // Generate kode supplier
    function generateRandomCodeSupplier() {
        var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        var result = 'SUP-'; // Tambahkan awalan SUP-
        for (var i = 0; i < 3; i++) {
            result += characters.charAt(Math.floor(Math.random() * characters.length));
        }
        return result;
    }

    document.addEventListener('DOMContentLoaded', function() {
        const form = document.getElementById('supplierForm');
        const submitButton = document.getElementById('submitButton');
        const kodeInput = document.getElementById('kode');
        
        // Generate kode saat halaman dimuat
        kodeInput.value = generateRandomCodeSupplier();

        // Input yang wajib diisi
        const requiredInputs = [
            'jenis_pakan', 
            'nama', 
            'harga_per_kg', 
            'telepon'
        ];

        // Fungsi untuk validasi form
        function validateForm() {
            let isValid = true;
            
            // Cek setiap input wajib
            requiredInputs.forEach(inputId => {
                const input = document.getElementById(inputId);
                if (!input.value.trim()) {
                    isValid = false;
                }
            });

            // Aktifkan/nonaktifkan tombol submit
            submitButton.disabled = !isValid;
        }

        // Tambahkan event listener pada setiap input wajib
        requiredInputs.forEach(inputId => {
            const input = document.getElementById(inputId);
            input.addEventListener('input', validateForm);
        });

        // Event listener saat form akan disubmit
        form.addEventListener('submit', function(e) {
            // Buat input hidden untuk mengirim kode
            const hiddenInput = document.createElement('input');
            hiddenInput.type = 'hidden';
            hiddenInput.name = 'kode';
            hiddenInput.value = kodeInput.value;
            form.appendChild(hiddenInput);
        });
    });