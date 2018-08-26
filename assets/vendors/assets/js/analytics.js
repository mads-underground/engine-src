var analyticsCharts = function() {
	var analyticObj = {
		data : {

		},

		init : function(obj){
			this.url = obj.url;
			this.csrfToken =  obj._token;
			if(obj.container){
				this.plotChart(obj.dataSeries,obj.type,obj.container);
			}else{
				this.bindEvents(obj.onChangeElement);
			}
		},

		/**
		 * [getAjaxData Get data from controller]
		 * @param  {[obj]} data [data to be sent to server]
		 * @param  {[string]} containerId [id of the canvas]
		 * @return {[type]}      [description]
		 */
		getAjaxData : function(data,containerId){
			_self = this;
			$.ajax({
				url : this.url,
				data: data,
				method : 'POST',
				success : function(containerId,resp){
					console.log(resp);
					debugger;
					_self.plotChart(resp,containerId);
				}.bind(this, containerId),
				error : function(e){
					console.error('Error while fetching analytics data' , e);
				}
			});
		},

		/**
		 * [plotChart Function to plot charts]
		 * @param  {[Array Json]} dataSeries [Data series to be plotted]
		 * @param  {[string]} container       [id or class of the canvas]
		 * @return {[type]}            [description]
		 */
		plotChart : function(dataSeries,container){
			debugger;
			var ctx = $(container);
			var chart = new Chart(ctx, {
				type: dataSeries.type,
			    animation:{
			        animateScale:true,
			    },
			    data: {
			        labels: dataSeries.labels,
			        datasets: dataSeries.data   
			    },
			    options: {
					title: {
			            display: true,
			            text: dataSeries.title || '' 
			        }
			    }
			});
		},

		bindEvents : function(container){
			var _self = this;
			$(container).off('change').on('change',function(){
				var $selectElm = $(this);
				debugger
				_self.getAjaxData({
					type : $selectElm.val(),
					_token: _self.csrfToken
				},$selectElm.find('option:selected').attr('data-containerId'));
			}).change();
		}

	};
	return analyticObj;
}