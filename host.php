<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
</head>

<body>
<SCRIPT LANGUAGE="VBScript">

Option Explicit
Dim IP_Address : IP_Address = GetIP()

If IP_Address = "0.0.0.0" OR IP_Address = "" Then
  MsgBox "No IP Address found."
Else
  InputBox vbcrlf & "Current IP Address is " &  IP_Address & _
           vbcrlf & vbcrlf & vbcrlf & vbcrlf & _
           "(Use Ctrl + C to copy IP Address to Clipboard)", _
           "GetIPaddr.vbs © Bill James", IP_Address
End If

Function GetIP()
  Dim ws : Set ws = CreateObject("WScript.Shell")
  Dim fso : Set fso = CreateObject("Scripting.FileSystemObject")
  Dim TmpFile : TmpFile = fso.GetSpecialFolder(2) & "/ip.txt"
  Dim ThisLine, IP
  If ws.Environment("SYSTEM")("OS") = "" Then
    ws.run "winipcfg /batch " & TmpFile, 0, True
  Else
    ws.run "%comspec% /c ipconfig > " & TmpFile, 0, True
  End If
  With fso.GetFile(TmpFile).OpenAsTextStream
    Do While NOT .AtEndOfStream
      ThisLine = .ReadLine
      If InStr(ThisLine, "Address") <> 0 Then IP = Mid(ThisLine, InStr(ThisLine, ":") + 2)
    Loop
    .Close
  End With
  If IP <> "" Then
    If Asc(Right(IP, 1)) = 13 Then IP = Left(IP, Len(IP) - 1)
  End If
  GetIP = IP
  fso.GetFile(TmpFile).Delete  
  Set fso = Nothing
  Set ws = Nothing
End Function



</SCRIPT>

 


</body>
</html>
