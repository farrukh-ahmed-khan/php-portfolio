param(
  [string]$Source = "assets/images",
  [int]$Quality = 80
)

# Requires cwebp in PATH: https://developers.google.com/speed/webp/download
$files = Get-ChildItem -Path $Source -Recurse -Include *.jpg,*.jpeg,*.png -File
foreach ($file in $files) {
  $output = [System.IO.Path]::ChangeExtension($file.FullName, ".webp")
  & cwebp -q $Quality $file.FullName -o $output | Out-Null
  Write-Host "Converted: $($file.FullName) -> $output"
}
