using System;
using System.Collections.Generic;
using System.Data.SqlClient;
using System.Linq;
using System.Web;
using System.Web.Configuration;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace WebTabanlı
{
    public partial class AnaSayfa1 : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {

        }

        protected void GridView1_SelectedIndexChanged(object sender, EventArgs e)
        {

        }

        protected void btn_ekle_Click(object sender, EventArgs e)
        {
            string connectionName = WebConfigurationManager.ConnectionStrings["baglanti"].ConnectionString;
            SqlConnection baglan = new SqlConnection(connectionName);

            string sorgu1 = "insert into Toys values(1,2,'oyuncakadi',25,100)"; 
            baglan.Open();

            SqlCommand komut1 = new SqlCommand(sorgu1, baglan);
            var deger = komut1.ExecuteNonQuery();

            baglan.Close();

        }

        protected void btn_guncelle_Click(object sender, EventArgs e)
        {
            string connectionName = WebConfigurationManager.ConnectionStrings["baglanti"].ConnectionString;
            SqlConnection baglan = new SqlConnection(connectionName);

            string sorgu1 = "update Toys set Name='oyuncak' where Id=1"; 
            baglan.Open();

            SqlCommand komut1 = new SqlCommand(sorgu1, baglan);
            var deger = komut1.ExecuteNonQuery();

            baglan.Close();
        }

        protected void btn_sil_Click(object sender, EventArgs e)
        {
            string connectionName = WebConfigurationManager.ConnectionStrings["baglanti"].ConnectionString;
            SqlConnection baglan = new SqlConnection(connectionName);

            string sorgu1 = "delete from Toys where Id=1"; 
            baglan.Open();

            SqlCommand komut1 = new SqlCommand(sorgu1, baglan);
            var deger = komut1.ExecuteNonQuery();

            baglan.Close();
        }

        protected List<string> btn_tumunugetir_Click(object sender, EventArgs e)
        {
            List<string> liste = new List<string>();
            string connectionName = WebConfigurationManager.ConnectionStrings["baglanti"].ConnectionString;
            SqlConnection baglan = new SqlConnection(connectionName);

            SqlDataReader dataReader;

            string sorgu = "select * from Toys";
            SqlCommand komut = new SqlCommand(sorgu, baglan);

            baglan.Open();

            dataReader = komut.ExecuteReader();

            while (dataReader.Read())
            {
                var id = dataReader.GetValue(0).ToString();
                var ToysId = dataReader.GetValue(1).ToString();
                var name = dataReader.GetValue(2).ToString();
                var unitPrice = dataReader.GetValue(3).ToString();
                var unitsInStock = dataReader.GetValue(4).ToString();
                liste.Add("id:" + id + " " + "ToysId:" + ToysId + " " + "Name:" + name + " " + "UnitPrice:" + unitPrice + " " + "UnitsInStock:" + unitsInStock);
            }
            baglan.Close();
            return liste;
        }
    }
}