$(function() {
	var kategori = [];

	$.getJSON("getGridKategori/", function(result){
	    $.each(result, function(index) {
		    kategori[index+1] = result[index].namaKategori;
	    });
	    console.log(kategori);
	});

	$.ajax({
		type : "GET",
		url : "getGridLowongan/"
	}).done(function() {
		$("#lowonganGrid").jsGrid({
			height: "auto",
	      	width: "100%",
		    // filtering: true,
		    inserting: true,
		   	editing: true,
		    sorting: true,
		    paging: true,
		    autoload: true,
		    pageSize: 10,
		    pageButtonCount: 5,
		    deleteConfirm: "Anda yakin ingin menghapus data ini?",
		    controller: {
		    	loadData: function(filter) {
		    		return $.ajax({
		    			type: "GET",
		    			url: "getGridLowongan/",
		    			data: filter
		    		});
		    	},
		    	insertItem: function(item) {
		    		return $.ajax({
		    			type: "POST",
		    			url: "insertGridLowongan/",
		    			data: item
		    		});
		    	},
		    	updateItem: function(item) {
		    		return $.ajax({
		    			type: "POST",
		    			url: "updateGridLowongan/",
		    			data: item
		    		});
		    	},
		    	deleteItem: function(item) {
		    		return $.ajax({
		    			type: "POST",
		    			url: "deleteGridLowongan/",
		    			data: item
		    		});
		    	}
		    },
		    fields: [
			    {
			    	name: "tglPost",
			    	title: "Tanggal Post",
			    	type: "text",
			    	width: 100,
			    	align: "Center",
			    	editing: false,
			    	readOnly: true
			    },
			    {
			    	name: "lowongan",
			    	title: "Lowongan",
			    	type: "text",
			    	width: 100,
			    	align: "left",
			    	validate: {
			    		validator: "required",
			    		message: function(value, item) {
			    			return "Field Lowongan Tidak Boleh Kosong!!!";
			    		}
			    	}
			    },
			    {
			    	name: "deskripsi",
			    	title: "Deskripsi",
			    	type: "textarea",
			    	width: 200,
			    	align: "left",
			    	validate: {
			    		validator: "required",
			    		message: function(value, item) {
			    			return "Field Deskripsi Tidak Boleh Kosong!!!";
			    		}
			    	}
			    },
			    {
			    	name: "persyaratan",
			    	title: "Persyaratan",
			    	type: "textarea",
			    	width: 200,
			    	align: "left",
			    	validate: {
			    		validator: "required",
			    		message: function(value, item) {
			    			return "Field Persyaratan Tidak Boleh Kosong!!!";
			    		}
			    	}
			    },
			    {
			    	name: "gaji",
			    	title: "Gaji",
			    	type: "number",
			    	width: 75,
			    	align: "right",
			    	validate: {
			    		validator: "required",
			    		message: function(value, item) {
			    			return "Field Gaji Tidak Boleh Kosong!!!";
			    		}
			    	}
			    },
			    {
			    	name: "kota",
			    	title: "Kota",
			    	type: "text",
			    	width: 100,
			    	align: "center",
			    	validate: {
			    		validator: "required",
			    		message: function(value, item) {
			    			return "Field Kota Tidak Boleh Kosong!!!";
			    		}
			    	}
			    },
			    {
			    	name: "jamKerja",
			    	title: "Jam Kerja",
			    	type: "select",
			    	width: 100,
			    	items: [
			    	{ Name: "Full Time" },
			    	{ Name: "Part Time" },
			    	{ Name: "Magang" }
			    	],
			    	textField: "Name"
		      		// valueField: "Id",
		      		// selectedIndex: 1
		      	},
		      	{
		      		name: "kuota",
		      		title: "Kuota",
		      		type: "number",
		      		width: 50,
		      		align: "center",
		      		validate: {
		      			validator: "required",
		      			message: function(value, item) {
		      				return "Field Kuota Tidak Boleh Kosong!!!";
		      			}
		      		}
		      	},
		      	{
		      		name: "fkKategori",
		      		title: "Kategori",
		      		type: "select",
		      		width: 100,
		      		items: kategori
		      	},
		      	{ type: "control" }
	      	]
	      });
	});
});