using Entities.Concrete;
using Microsoft.EntityFrameworkCore;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace DataAccess.Concrete.EntityFramework
{
    public class OyuncakSatisContext : DbContext
    {
        protected override void OnConfiguring(DbContextOptionsBuilder optionsBuilder)
        {
            optionsBuilder.UseSqlServer(@"server=(localdb)\mssqllocaldb;Database=OyuncakSatis;Trusted_Connection=True");
        }

        public DbSet<EducationalToy> EducationalToys { get; set; }
        public DbSet<PlushToy> PlushToys { get; set; }
        public DbSet<PuzzleToy> PuzzleToys { get; set; }
        public DbSet<ScienceToy> ScienceToys { get; set; }

    }
           
}

