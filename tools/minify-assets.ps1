param(
  [string]$CssInput = "assets/css/style.css",
  [string]$CssOutput = "assets/css/style.min.css",
  [string]$JsInput = "assets/js/custom.js",
  [string]$JsOutput = "assets/js/custom.min.js"
)

# Requires Node.js + npm packages:
# npm i -g clean-css-cli terser

& cleancss -o $CssOutput $CssInput
& terser $JsInput -c -m -o $JsOutput
Write-Host "Minified assets generated:"
Write-Host " - $CssOutput"
Write-Host " - $JsOutput"
