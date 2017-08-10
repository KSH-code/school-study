<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>회원가입</title>
</head>
<body>
    <h2>> 회원가입</h2>
    <form action="mem_print.php" name="mem_form" method="POST">
        <table border="1" width="640" cellspacing="1" cellpadding="4">
            <tr>
                <td align="right">아이디 : </td>
                <td><input type="text" size="15" maxlength="12" name="id" value="guest"></td>
            </tr>
            <tr>
                <td align="right">이름 : </td>
                <td><input type="text" size="15" maxlength="12" name="name"></td>
            </tr>
            <tr>
                <td align="right">비밀번호 : </td>
                <td><input type="password" size="15" maxlength="12" name="password" value="1234"></td>
            </tr>
            <tr>
                <td align="right">비밀번호 확인 : </td>
                <td><input type="password" size="15" maxlength="12" name="password_confirm"></td>
            </tr>
            <tr>
                <td align="right">성별 : </td>
                <td><input type="radio" name="gender" value="M" checked>M<input type="radio" name="gender" value="W">W</td>
            </tr>
            <tr>
                <td align="right">휴대전화 : </td>
                <td>
                    <select name="phone1" id="">
                        <option value="010">010</option>
                        <option value="011">011</option>
                        <option value="017">017</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td align="right">주소 : </td>
                <td><input type="text" size="50" name="address"></td>
            </tr>
            <tr>
                <td align="right">취미 : </td>
                <td><input type="checkbox" name="movie" value="yes">영화감상<input type="checkbox" name="book" value="yes">독서<input type="checkbox" name="shop" value="yes">쇼핑<input type="checkbox" name="운동" value="yes" checked>운동</td>
            </tr>
            <tr>
                <td align="right">자기소개 : </td>
                <td><textarea name="intro" rows="5" cols="60"></textarea></td>
            </tr>
        </table>
        <br>
        <table>
            <tr><input type="submit"><input type="reset"></tr>
        </table>
    </form>
</body>
</html>