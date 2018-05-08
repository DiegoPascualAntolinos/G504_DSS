<!-- El [arroba]extends sirve para que automaticamente ponga la cabecera --> 
<!--el footer y todos los estilos en las paginas. Es como cargar -->
<!--la pagina maestra -->

<head>
    <style>
       
       body { 
           background: #F8F8FF;
           background-repeat: repeat-x; 
           color: 	#DCDCDC; 
           font-family: arial; 
           font-size: 15px; 
           }

        .centro { 
            border: 0; 
            float: right; 
            background: #fff; 
            color: #f00; 
            width: 50%; 
            line-height: 10px; 
            font-size: 10px; 
            margin: -220% 0 0 0; 
            overflow: hidden; 
            padding: 0 
            }

        #cuerpo { 
            width: 900px; 
            margin: 0px auto; 
            }

        #cabecera { 
            width: 100%; 
            height: 400px; 
            background: url(' https://gozarte.net/wp-content/uploads/2018/01/maleta.jpg ') #000; 
            position: relative; 
            background-position: center center; 
            background-repeat: no-repeat; 
            }

        #avatar { 
            width: 237px; 
            height: 222px; 
            background: url('data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxMOEhATERITFRATEQ8VExEREhUVGRkZFxUWFhcWExUYHSghGBolHRcVITEhJikrLi4uFx8zODgtOCgtLi0BCgoKDg0OGxAQGy0lICUtLS0rLS8vLS0tMC0tLS0tLS4vLS8tLS0vLS0tLSstLS0tLS8tLSstLS0vLS0tLS0tLf/AABEIAOEA4QMBEQACEQEDEQH/xAAcAAEAAgMBAQEAAAAAAAAAAAAABQYDBAcCAQj/xABDEAACAQIBBwcICAYBBQAAAAAAAQIDBBEFBhIhMVFxBxNBYYGRoSIyQlJyscHRFBUjU1RikpMzQ4KisvDhY4OzwvH/xAAaAQEAAwEBAQAAAAAAAAAAAAAAAwQFBgIB/8QANxEBAAIBAgMECAYBAwUAAAAAAAECAwQREiExBUFRkRMyYXGxwdHhFCJSgaHwQgYz8SMkNENy/9oADAMBAAIRAxEAPwDuIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAiMqZy21tip1U5r0IeXLg8NnbgQ3z46cple0/Z2oz8615eM8o/vuVm95Rkv4Vu311Jpf2xT95F+K36Q1cf+n5/9l/KPrt8ERX5Rbv0YUEvYm336ZJXLMrdewtNHWbecfRgXKTeR2xt3xpzXuqFqlYsT2Fpe6becfRIWfKk/wCdbLDfSqa/0yXxJfQb9JUsvYcR6l/OPp9FnyVnzZXLS53m5vDyKy0OxS81vqxPNsF47mVm0GbF1jePZz+6xp4kKm+gAAAAAAAAAAAAAAAAAAAAAANHK2VqdpHSqPW/NgtcpcF8dhDmz0xRvZZ02lyai3DSPfPdDnGXs6q9y3FS5ul6kHrfty2vhqRl5NVfJ7IdXo+y8GCN5jit4z8o/sq4yKrUY5ligwTLmMa1Qv4nxjLlVbI8ssVUciayBnVc2DSpz0qS20amLh/T0w7PE9XwUydeviy9RgpfnMc/F1jNfOyhlFYQehWSxlRk9fGL9KPWu1Izc+mvi69PFkZcU0lYCuiAAAAAAAAAAAAAAAAAAAAjss5UjbQx2zfmx+L6ipq9XXBX2z0ha0ulnPbbu75c3ypcyqylOcm5PpfuW5GDOS2S3Fad5dZp8dcdYrWNoQtXaTVaFejGySr0mLHNG7uFiqWhF+lWeh4a5eBdx4bz3M7N2rpcXKbbz7Of2/lK0+TWq15VxTi90acp+LcS5TFMdVC3+oMcerSZ/eI+UvFbkvqejdQb66Mo+KmyzW0VfI/1BTvxz5/aEHlHMK+oJtU41Vvoz0n+mSTfYmWaZapq9q6bJ3zHvj/lWKsHFuMk4yTwcZJprqaetFyr3eYmN4Y2WKqOR6o1pU5RnCTjOLxjKLwae9MniImNpUcjsWYmeKv481WwjdRWO5VEtsorolvXaurH1mjnF+avq/BnXrtK4FB4AAAAAAAAAAAAAAAAADFdV1SjKUtiXfuRDnzVw45vbue8dJvaKwoeVLiVWUpS2vwXQl1HJ3zWzXm9usul0+OMdYrCCuiajSxvGSMi1b2po01hFYadR+bFde99RewYbZJ2h91Osx6WnFfr3R3z/fF0nIebdCzScY6VXpqzWMv6fVXDxNfFgpj6dfFyer7RzamdrTtXwjp90wTqAAAAReXM37e+jhWppywwjUjqnH2ZfDYSUyWpPJNh1GTFP5Z/buchzszSq5Oli/Lt5PCFZLDhGovRl4PwNXT565OXe1MeprmjwnwVxl+qHI929xKlOE6cnGcJKUZLamukn4YtHDPSVHI7vmhl+OUbeNRYKpHyasF0SS6Op7Vx6jmtXppwZOHu7vcgiU2VX0AAAAAAAAAAAAAAAAQGcFxpNQWyOt8f/nvOZ7X1PHl9FHSvX3/aGnose0cXirF0Z9Gxjadpk+V1VjTh063LojFbZP8A3cXtNinLeKwny6iuDHOS3/Muk5OsIW1ONOmsIrvb6ZSfS2dLjx1x14auTz575rze882ye0IAAAAAGK6toVoSp1IqUJpqUZLFNM+1tNZ3h9iZid4cNzzzclk6vorF0Z4yoze7pjL80cVxxT6ToNJnjLXfv716uTjrv3q+y/VWyLLyfZc+hXcFJ/Y1nGnU3LF+RLsk+6TIdfp/TYZ26xzj5qnFtLuRyqUAAAAAAAAAAAAAAA8zlgm9ybPGTJGOk3npEb+T7Ebzsql7LFtva22cJxze02t1nm2sUbRshrosUaGNac0sn81S5xry6uvhH0V8e06bs7DwYuKes/DuY3aWo9Jk4I6V+Pf9E6aDNAAAAAAAAILPTIiv7WpTS+1itOk/zxTwXasY9pY0ub0WSJ7u97pbhlwU6mr3kfGWKqOR+gM0cp/S7O3qt4ylBKftQbhLxTfacfrMPoc9qe3l7p5wlpbirEpgrPYAAAAAAAAAAAAADXv5YQl14IzO18nBpLe3aP5+iXDG94Vm6OSo18aLlS5ycY+tKMe94FzDTjtFfGdl2L8FZt4Ru6BCKiklqSSSXA7OIiI2hy8zMzvL0fXwAAAAAAAAAcCz0sfo99dQSwjzjnHhUSngupaTXYdTor8eGs/3lySTO9UIzQqp5HWuR660ravTf8uviupTjH4qXec/21TbLW3jHwl9088phfjGTgAAAAAAAAAAAAANTKfmdq+Ji9uz/wBvH/1HwlPp/WVy6OZo1cbVyYsbij7fuTZp6CN89Pem1E7YLe5eDrXOgAAAAAAAAABxnlXhhf4+tQpN9818EdD2XP8A0f3n5Pf+Kms2KqmR0rkYlrvV0YW7/wDIY3bkcsc+/wCTzp+sunHPrQAAAAAAAAAAAAADVykvI7UY/bld9Nv4TH0TYPXVu6OXo1sbSsqmjXov/qRXe8PiaOitw5qT7VjLXiw2j2L2de5sAAAAAAAAAAOJ8qFdTyhUS9CnRh/bp/8AudH2bXbBHtmXv/FU2a1VTI6dyMUvJvJ75UY9ym3/AJIxO3Lc6V9/yfNPHWXSjBWQAAAAAAAAAAAAAGG7hpQkur3ayn2hi9Lpr1jw38ub3jna8Sq90cVRs40PcvDZtLdPYv41+yddKtThNelFN9T6V34nY4ckZMcXjvcznxTiyTSe5sEqIAAAAAAAA8V6qpxlOTwjGLlJvoSWLZ9iJmdoH52ytfO5rVqz21Kk54bk3qXYsF2HWYKcFIr4JbxtGzTZcqpZHZ+Sqy5qxUmtdarUqdiwgvCGPac12vk49Rt4REfP5vWGNqriZaYAAAAAAAAAAAAAAAq2VKWhKS7uD2HEanB6DPand3e7ubOntxViUFdH2jSxpTM/KqhN0JvVN402/W6Y9vvXWbnZufhn0c9/RT7U0vFX01e7r7vH9lyNpgAAAAAAAAFA5VM4VSpfRKb+0qpOrh6NP1eMn4J70aXZ+Dit6SekdPf9k+Gm/wCaXJ2b1XzIzWVpKvUp0oLGdScYR4yeGL6lt7CabxSs3t0jmpXjfk/RNhaRoUqdKHmU4QhHhFJHGZLzkvN56zO6aI2jZsHh9AAAAAAAAAAAAAAAIvL1rpw01tjt4f8AHzMjtbS+kp6WvWvX3fb6rmjy8NuGe9TbowKN/Gh7l4PFamnqa+BaovY43XbNTOiNxhSrNKutSb1Kpw/N1d3Vv6XVcccNuvxc/wBo9mWw75Mcb1+H29vmtBdYwAAAAAFbzwztp5Og4rCdzJeRS3fmqbo+L6Olqxp9POWfYsYcE5Ofc4neXM6051KknKpOTlKT6W/92dBv46xWIiFu8REbQwMs1UsjpHJNm/jKV5UWpaUKGPS9k5r/ABX9Rmdq6nl6Gvvn5R8/JWiOe7p5hPYAAAAAAAAAAAAAAAAAU3OTJjovTivs5P8AS9z6txzWu0XoLcdfVn+PZ9PJv6DUxkjht1j+VTuiCjbxoqptLNVyvRach58VKCUK6dWC9NP7Rdr1T7cH1mhh1dq8rc/ixtZ2LjyzxYp4Z8O77f3kueTs5bW4w0K0VJ+hN6Eu6W3sL9M1LdJc/n7O1OH1qTt4xzj+EsnjsJFJ9Aisp5x2trjztenF+opaUuyEcX4HqtLW6QsYtJmy+rWfl5qJnDylymnCzg4J4rnqiTlxhDWlxePAuYtLHWzSxdmRXnlnf2R9f773Pq9WVSUpTk5Tk25Sk223vbe00aRtG0J7xERtDGyzVSyJ3M/NqeUq2jrjQg06tTcvVj+Z+G3j51OqjBTfv7o/vco5Hc7W3jShGFOKjCEVGMVsSWpJHN2tNpm09ZQsp5AAAAAAAAAAAAAAAAAA8VaamnGSTi1g0+k+WrFo2no+1tNZ3jqoWc2bc6ONSknKlrbW2UeO9dffvMPUaGcU8VOdfg6bs/tGuXal+Vv4n7qZV2kNW/XoxMkq9MUyxQeY1pQ8yUo+zJx9xcxvNqVt60RLXubmc9Uqk5LdKcpe9l/E+Vx0r6sRH7Q1UsC5VDkl8ZYqoZHlliqjkWPNPM+tlFqWunbJ+VWa271ST859exeB5zaquGNus+H1ZufJFeXe7NkrJtK0pRpUYqMI9HS30uT6W95iZMlsluK081CZ35y2zw+AAAAAAAAAAAAAAAAAAAAAK1lzM2jc4yp/ZVX0xWMX7UPisO0qZdHS/OOUtfR9sZsH5b/mr/Pn9VHypmrdW+ONNzj69LGa7UvKXcUrafJTu8nQ6ftTTZultp8J5fb+UBU1ant3H2jQ9rBMuYxrVC/ifGJsuUV8iYyVmtd3eHN0JqL/AJlRc3HjjLzlwTJPS0r1lk6jVYsfW3lzX/N7k3o0Wp3Uuemv5aWFNcVtn24LqK+TWWnlTl8WJn1tr8qco/leYRUUkkkkkkksEktiSKai+gAAAAAAAAAAAAAAAAAAAANgYZXdNbakFxkl8TzxR4pIxXnpWfJ5+n0vvaf64/McVfF99Bk/TPlJ9Ppfe0/1x+Y4o8T0GT9M+Uta7+i1v4v0eft83L3nyeGeuyXH+Jx+pxR7t0XVyBkyW2FD+mpo/wCMkIrXuWq63Xx328t/k8RzbyWv5dB+1VcvfIkiZjoTrtfPfby+yRsqFjQ/hRtYPfDm0+9H2ZmVbJbU5PX4p9+7d+saP31P9yPzPm0oPRZP0z5H1jR++pfuR+Y2l89Ffwnyeo39J7KtN8Jx+Y4Z8HzgtHdLPGSezXwPjy+gAAAAAAAAAAAAAAAPM5qKbbSS2tvBLiz5MxEby+xEzO0K5lTPGlSxVJOrLevJj+rp7EUcnaGOvKnP4NbT9kZcnO88MfyqWUs77qrjhNU47qcUv7ni+7AqW1mW3ft7m3p+ydLTrHFPt+nRA3F3Uq/xKk5+3OUveyGbWt1lpUxUp6lYj3Rs19FbhCTeXlolg3eGiWpuxyRPU3YpRW4nqbyxTityLVDeWFwW5dxZrL5My+aK3LuJYlXtMmityJIlXtMvjityJYlXtMstvczpa6c5we+EpR9zJNonqq5Ii3WE7k7Pi+t8PtnUj6tZKf8Adql4ni2lxW7tvco5NNjnu29y5ZF5TqNTCNzTdJ/eQxnDtXnLuZVydn2jnSd1K+mmPVlebS6hWip0pxnB7JQakn2oo2rNZ2tGytMTHVmPL4AAAAAAAAAAGhlXKsLZa9c3sgtvF7kVNTrKYI5858FnT6W+aeXKPFRsr5UqXD8uXk9EFqiuzpfWzCzanJmne08vDudHptNjwx+WOfj3oSseatGjRqktVijESPb4z1A8MkgeGS1GOTJ6jHJk9Xxhmy1QYmyxV8l8xJoQWfMSSFewSwrWfCWFez4yWFez4SQr2b+RstV7GenQqOL9KO2Muqcdj47dwyYaZY2vCteInq65mjnrSyhhTlhSucP4beqW90308Nq69pi6rRXw/mjnXx+qpauy1FJ5AAAAAAAAI7K+U1QWEddRrUt3WzO12ujTxw152n+PbK3ptNOWd56KXdVHJuUm3J7WznJtNp4rTvMt/HWKxtHRH1iSq1VqxoSqSUYRcpPZGKxZPjrNp2iN5TTetK8Vp2hPZPzEqVMHXqKmvUh5Uu17F4mpi0Fp53nZm5u3MdOWKu/tnlH1+CxWmZ1pT203N76knLw2eBcrpMVe7dlZe19Vf/Lb3f3dIQyLbR2W9Ff9qHyJYxUj/GPJVnWaieuS3nL39U2/3FH9qHyPvo6eEPP4rP8Art5y+fVNv9xR/ah8j7wV8D8Vn/Xbzk+qLf8AD0f2ofIcMeB+Kz/rt5yfU9v+Ho/tQ+R92g/FZ/1285fPqa2/D0P2ofI+n4rP+u3nJ9S234eh+zD5H3eT8Vm/Xbzl8+pbb8PQ/Zh8hxT4vn4nN+ufOT6ltvw1D9mHyPvHbxfPT5f1T5y8zyDay22tu+NGn8j7GS8d8np8v6p85Rt7mNY1v5Cg99KUoeCeHgSV1OSvekrq80f5b+9U8scl0ljK1raX/TrLB9lSOrvS4lvHr4/zjyT11u/rR5KHlLJ1W1nzdenKnPdJbeuL2SXWjTx3reN6zuk4otG8NRk8IbPsZOLTTaaaaaeDTWxprYySOavZ1vk/z1+l4W9y0rhLyJ7OcS37prx2mHrtD6P/AKmP1e/2fZCvRlgAAAAAGvfXKpRcnt2Jb2VdZqq6fFN5690eMpcWOcltlQuqjm3KTxbetnIWvbJab2nnLdx1isbQj6x7qs0ZMl5Gndy1eTTT8qbXhHezQ0mlvnnlyjvl51Gspp68+c90Lvk3JtO2jo044b5PXJ+0zocOCmKNqw53Pqcme295+jcJUAAAAAAAAAAAAAAABqZUyZSu6bp14RnB9D2p74vbF9aPePJbHPFWdn2tprO8OP555l1Mnt1KeNS1b8/0oY7FUw6PzbOGrHd0msrl/LPK3x9yxXJxe9U2aMPFn2E3FqUW1KLTUk8Gmnimn0PEk2iY2lXs7hmJnMso0PLwVxSwjVS6d1RLc9fBp9RzGv0n4e/L1Z6fQrbdZii9AAAAAruVrjnJP1Y6l8Wcd2jqvT5p29WOUfOf3+DV02Pgr7ZRFYqVXqvmTsnO5norVFa5y3Lq62X9Hppz34Y6d8mfURhpxd/cu1vQjTiowWEUsEkdVSlaVitY5Q5697XtNrTzZD28gAAAAAAAAAAAAAAAAB4q01OLjJKUZJqUWsU09TTXSj7EzE7wOKZ+ZrPJ1VSp4u2qt829ui9rpt+KfSuDOj0Oq9NXafWjr9UnFvCqs0YQ2SubGWpWFzTrLHRT0akV6UH5y49K60jxqdPGfFNJ/b3oOLhnd+gKNVTjGUWnGSTi1saaxTRx0xMTtKy9nwAAGvfVdCD3vUu0odp6j0OntMdZ5R+/2S4a8V4VuscZVrVaVVE9Viq2ZJslQpqPpPXJ9f8AxsOw0enjBiivf1n3sTU5vS337u5ultXAAAAAAAAAAAAAAAAAAAA0Mu5Khe0KlGpsmtT6YyWuMl1p4EuHLOK8XjuH58vbWVCpOnUWE6cpRkutPDV1HXY7xesWr0l5swMnqrWdk5Kcrc/aOlJ4zt5aK9iWuHd5UeEUc12vg4M3HHS3x7/qlw23jbwXUykwAAjcrT81dWJzPb2Xe9MfhG/nyj4St6aOsoWsYdWhV7yPb85Wjjsj5T7Nnjh3Gt2Xh9JnjfpHP6fy86rJwYp9vJaTrGMAAAAAAAAAAAAAAAAAAAAAAcj5XMmc1cUq8Vqrwal7dPBYvjFx/SzoeycvFjmk93wl5soTNmqtZcuSm/5q+VNvya9OccPzRWnF90ZrtM/tfFx6fi/TO/ny+j5httfbxdnOVXAABD5SeM32e44rta/Fq7ezaP4XsEflhF1ilVdqk83KeqpLe0u5Y/E6bsSn5b39sR5f8qeutzrVMm4oAAAAAAAAAAAAAAAAAAAAAAFL5WLXTsdPppVqUv1Y03/ku40+yr7Z9vGJ+rzbo40zp6q1kpmtcc1eWkt1xRT4SkovwbI9VTiwXj2T9UVZ2vD9CnEtAAAQ1950uJwvaH/l5Pe0MPqwjKxXqt1TOb6+yfXOXuR1nY0f9v8AvPyZ+t/3P2SZrKgAAAAAAAAAAAAAAAAAAAAABXeUKGlk666owfdOL+Bc7PnbU1/vc+W6OEM66qrZsZNx56hht56lhx01gfcn+3b3T8EPfD9InCNEAAaV9ZueuO3pW8w+0+y7Zrelxde+PH7rGHNFeUo1ZMqSeDWit7a9yMzD2TqbW2tXhjxmY+Urf4nHWPFNW1BU4qK2L/WzqcGGuHHGOvSGfkvN7TaWUmeAAAAAAAAAAAAAAAAAAAAAADFd20a0J05rGE4yjJb01g0eqWmlotHWBx3LXJzd0ZtUI8/Sx8mSlCMkuhTjJrX1rFcNh02DtXBev554Z/f+EF8c9yazI5P6tKrC4vEo821KFFSUm5LZKbWpJPWkm9aXB1td2pS1Jx4ee/WfZ7HmmGd97OmmAsgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAf/9k='); 
            position: absolute; 
            bottom: 0; 
            right: 0; 
            border: 5px solid white; 
            }

        #opciones { 
            width: 900px; 
            padding: 15px; 
            margin-bottom: 0px; 
            position:relative;
            font-size: 18px; 
            }

        #contenedor { 
            width: 900px; 
            padding: 10px; 
            background: #efeded ; 
            border: 2px solid #BBB; 
            overflow: auto; 
            }

        #contenedor-izq { 
            width: 400px; 
            float: left; 
            }

        #contenedor-der-top { 
            width: 400px; 
            padding-left: 20px; 
            padding-top: 10px; 
            float: right; 
            }

    </style> 


</head>
<?php $__env->startSection('content'); ?>

	<body>
        <br/><br/><br/><br/>
		<div id="cuerpo">
			<div id="cabecera">
                <div id="avatar">
                    </div>
			</div>
            <p></p>
			<div id="opciones">
            <h1><font color="grey">¿Preparado para añadir ofertas, vuelos y hoteles? </font></h1>
            <hr></hr>
                <ul>
                <a class="btn btn-primary btn-lg" href="/ofertaAdmin" role="button">Ofertas</a>
                <a class="btn btn-primary btn-lg" href="/vueloAdmin" role="button">Vuelos</a>
                <a class="btn btn-primary btn-lg" href="/hotelAdmin" role="button">Hoteles</a>
                </ul>
                <p></p>
            
			</div>
			<div id="contenedor">
				<div class="centro"></div>
				<div id="contenedor-izq">
    <p></p>
    
    <h1><font color="grey">Tus datos personales: </font></h1>
    <p></p>
    <hr></hr>
    <div class="form-group"> <!-- dni -->
        <label for="dni" class="control-label">DNI</label>
        <input type="string" class="form-control" id="dni" name="dni" placeholder="">
    </div>   

    <div class="form-group"> <!-- Nombre -->
        <label for="nombre" class="control-label">Nombre</label>
        <input type="string" class="form-control" id="nombre" name="nombre" placeholder="">
    </div>    

    <div class="form-group"> <!-- Email -->
        <label for="email" class="control-label">Email</label>
        <input type="string" class="form-control" id="email" name="email" placeholder="">
    </div>


    <div class="form-group"> <!-- Dirección -->
        <label for="direccion" class="control-label">Dirección</label>
        <input type="string" class="form-control" id="direccion" name="direccion" placeholder="">
    </div>
     

    <div class="form-group"> <!-- Telefono -->
        <label for="telefono" class="control-label">Teléfono</label>
        <input type="string" class="form-control" id="telefono" name="telefono" placeholder="">
    </div>
    </div>
    </div>
        <p></p>
        <br></br>
</body>




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.mainlayout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>