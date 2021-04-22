<%@ Page Title="" Language="C#" MasterPageFile="~/AnaSayfa.Master" AutoEventWireup="true" CodeBehind="AnaSayfa1.aspx.cs" Inherits="WebTabanlı.AnaSayfa1" %>
<asp:Content ID="Content1" ContentPlaceHolderID="head" runat="server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" runat="server">
    <table style="width:100%;">
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>
                <asp:Button ID="btn_ekle" runat="server" OnClick="btn_ekle_Click" Text="Ekle" />
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>
                <asp:Button ID="btn_guncelle" runat="server" OnClick="btn_guncelle_Click" Text="Güncelleme" />
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>
                <asp:Button ID="btn_sil" runat="server" OnClick="btn_sil_Click" Text="Silme" />
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>
                <asp:Button ID="btn_tumunugetir" runat="server" OnClick="btn_tumunugetir_Click" Text="TümünüGetir" />
            </td>
        </tr>
    </table>
    <div>
        <asp:GridView ID="GridView1" runat="server" Width="100%" OnSelectedIndexChanged="GridView1_SelectedIndexChanged"></asp:GridView>
    </div>
</asp:Content>
