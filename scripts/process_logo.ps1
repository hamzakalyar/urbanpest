Add-Type -AssemblyName System.Drawing

$src = 'C:\Users\hasni\.gemini\antigravity-ide\brain\3467ceb0-91f7-4940-adf5-e81c6ba2fa75\.user_uploaded\media_1788527179101.jpg'
$destDir = 'd:\Softskills Engineering\Urbanpest\assets\images'
$rootDir = 'd:\Softskills Engineering\Urbanpest'

$img = [System.Drawing.Image]::FromFile($src)
$w = $img.Width
$h = $img.Height

# 1. Save original as logo.png & logo.jpg
$img.Save("$destDir\logo.png", [System.Drawing.Imaging.ImageFormat]::Png)
$img.Save("$destDir\logo.jpg", [System.Drawing.Imaging.ImageFormat]::Jpeg)

# 2. Shield Crop
$cropX = 255
$cropY = 90
$cropW = 514
$cropH = 550

$bmpCrop = New-Object System.Drawing.Bitmap($cropW, $cropH)
$g = [System.Drawing.Graphics]::FromImage($bmpCrop)
$g.InterpolationMode = [System.Drawing.Drawing2D.InterpolationMode]::HighQualityBicubic
$g.SmoothingMode = [System.Drawing.Drawing2D.SmoothingMode]::HighQuality
$srcRect = New-Object System.Drawing.Rectangle($cropX, $cropY, $cropW, $cropH)
$destRect = New-Object System.Drawing.Rectangle(0, 0, $cropW, $cropH)
$g.DrawImage($img, $destRect, $srcRect, [System.Drawing.GraphicsUnit]::Pixel)
$g.Dispose()

$bmpCrop.Save("$destDir\logo-shield.png", [System.Drawing.Imaging.ImageFormat]::Png)

# 3. Favicon (64x64)
$favDim = 64
$favBmp = New-Object System.Drawing.Bitmap($favDim, $favDim)
$gFav = [System.Drawing.Graphics]::FromImage($favBmp)
$gFav.InterpolationMode = [System.Drawing.Drawing2D.InterpolationMode]::HighQualityBicubic
$gFav.SmoothingMode = [System.Drawing.Drawing2D.SmoothingMode]::HighQuality
$gFav.Clear([System.Drawing.Color]::White)

$favPadding = 2
$favW = $favDim - ($favPadding * 2)
$favH = [int]($favW * ($cropH / $cropW))
if ($favH -gt ($favDim - ($favPadding * 2))) {
    $favH = $favDim - ($favPadding * 2)
    $favW = [int]($favH * ($cropW / $cropH))
}
$favX = [int](($favDim - $favW) / 2)
$favY = [int](($favDim - $favH) / 2)
$gFav.DrawImage($bmpCrop, $favX, $favY, $favW, $favH)
$gFav.Dispose()

$favBmp.Save("$destDir\favicon.png", [System.Drawing.Imaging.ImageFormat]::Png)
$favBmp.Save("$rootDir\favicon.png", [System.Drawing.Imaging.ImageFormat]::Png)
$favBmp.Save("$rootDir\favicon.ico", [System.Drawing.Imaging.ImageFormat]::Icon)
$favBmp.Dispose()

# 4. Touch Icon (192x192)
$touchBmp = New-Object System.Drawing.Bitmap(192, 192)
$gTouch = [System.Drawing.Graphics]::FromImage($touchBmp)
$gTouch.InterpolationMode = [System.Drawing.Drawing2D.InterpolationMode]::HighQualityBicubic
$gTouch.SmoothingMode = [System.Drawing.Drawing2D.SmoothingMode]::HighQuality
$gTouch.Clear([System.Drawing.Color]::White)
$gTouch.DrawImage($bmpCrop, 14, 8, 164, [int](164 * ($cropH / $cropW)))
$gTouch.Dispose()
$touchBmp.Save("$destDir\apple-touch-icon.png", [System.Drawing.Imaging.ImageFormat]::Png)
$touchBmp.Save("$rootDir\apple-touch-icon.png", [System.Drawing.Imaging.ImageFormat]::Png)
$touchBmp.Dispose()

# 5. Horizontal Logo: Shield on left, URBANX PEST CONTROL on right
# Text: X: 88, Y: 660, W: 848, H: 235
$textX = 88
$textY = 660
$textW = 848
$textH = 235

$textCrop = New-Object System.Drawing.Bitmap($textW, $textH)
$gt = [System.Drawing.Graphics]::FromImage($textCrop)
$gt.InterpolationMode = [System.Drawing.Drawing2D.InterpolationMode]::HighQualityBicubic
$gt.SmoothingMode = [System.Drawing.Drawing2D.SmoothingMode]::HighQuality
$srcTextRect = New-Object System.Drawing.Rectangle($textX, $textY, $textW, $textH)
$destTextRect = New-Object System.Drawing.Rectangle(0, 0, $textW, $textH)
$gt.DrawImage($img, $destTextRect, $srcTextRect, [System.Drawing.GraphicsUnit]::Pixel)
$gt.Dispose()

# Target height for horizontal banner
$targetH = 160
$shieldTargetW = [int]($targetH * ($cropW / $cropH))
$textTargetW = [int]($targetH * ($textW / $textH))
$gap = 18
$padX = 10
$padY = 8
$horizW = $shieldTargetW + $gap + $textTargetW + ($padX * 2)
$canvasH = $targetH + ($padY * 2)

$horizBmp = New-Object System.Drawing.Bitmap($horizW, $canvasH)
$gh = [System.Drawing.Graphics]::FromImage($horizBmp)
$gh.InterpolationMode = [System.Drawing.Drawing2D.InterpolationMode]::HighQualityBicubic
$gh.SmoothingMode = [System.Drawing.Drawing2D.SmoothingMode]::HighQuality
$gh.Clear([System.Drawing.Color]::White)

$gh.DrawImage($bmpCrop, $padX, $padY, $shieldTargetW, $targetH)
$gh.DrawImage($textCrop, ($padX + $shieldTargetW + $gap), $padY, $textTargetW, $targetH)
$gh.Dispose()

$horizBmp.Save("$destDir\logo-horizontal.png", [System.Drawing.Imaging.ImageFormat]::Png)

$textCrop.Dispose()
$horizBmp.Dispose()
$bmpCrop.Dispose()
$img.Dispose()

Write-Host "Processed all logo and favicon variants successfully!"
