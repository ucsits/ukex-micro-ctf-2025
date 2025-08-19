$encoded = "WldOb2J5QWlWVU5UZTJoaGRHbGZhR0YwYVY5NVlWOXJZV3hoZFY5aWRXdGhYMnhwYm1zaGZTST0="

$decoded = [System.Text.Encoding]::UTF8.GetString([System.Convert]::FromBase64String([System.Text.Encoding]::UTF8.GetString([System.Convert]::FromBase64String($encoded))))

Invoke-Expression $decoded
