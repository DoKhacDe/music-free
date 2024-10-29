<button type="button" hidden="" id="install-app-button">
    Tải app Insurlink
</button>

@push('scripts')
    <script>
        window.onload = function () {
            let installPrompt;
            const installButton = document.querySelector("#install-app-button");

            window.addEventListener("beforeinstallprompt", (event) => {
                event.preventDefault();
                installPrompt = event;
                installButton.removeAttribute("hidden");
            });

            installButton.addEventListener("click", async () => {
                if (!installPrompt) {
                    return;
                }
                const result = await installPrompt.prompt();
                console.log(`Install prompt was: ${result.outcome}`);
                disableInAppInstallPrompt();
            });

            function disableInAppInstallPrompt() {
                installPrompt = null;
                installButton.setAttribute("hidden", "");
            }
        }
    </script>
@endpush
