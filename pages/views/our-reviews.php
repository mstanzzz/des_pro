<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>ClosetsToGo | <?php echo $meta_title; ?></title>
	<meta name="description" content="<?php echo $meta_description; ?>">
    <link href="<?php echo SITEROOT; ?>app.css" rel="stylesheet">

</head>

<body class="clearfix">


	





    <?php
    require_once($real_root . '/pages/views/header.php');
    ?>
    <main class="main clearfix">

    <section class="breadcrumb-block about-us mb-5 desktop-show">
		<div class="wrapper">
			<div class="container-fluid">
				<div class="row">
					<div class="col-12">
						<div class="breadcrumb-block__wrapper" aria-label="breadcrumb">
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index.html" title="Home">Home</a></li>
								<li class="breadcrumb-item"><a href="<?php echo SITEROOT;?>about-us.html" title="Company">Company</a></li>
								<li class="breadcrumb-item active" aria-current="page">Careers</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
    <ul id="paginated-list" data-current-page="1" aria-live="polite">
        <section> 
            
                <div class="wrapper">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">

<?php
/*
echo "total_rows:  ".$total_rows;
echo "<br />";
echo "t_reviews:  ".count($t_reviews);
echo "<br />";
echo "start:  ".$start;
echo "<br />";
echo "end:  ".$end;
echo "<br />";
echo "last:  ".$last;
echo "<br />";
*/

if($total_rows > $rows_per_page){
echo getPagination($total_rows, $rows_per_page, $pagenum, $start, $last, $url_str); 
}

foreach($t_reviews as $val){
	echo "<li>";
	echo $val['name'];
	echo "<br />";
	echo $val['addr'];
	echo "<br />";
	echo $val['stars'];
	echo "<br />";
	echo $val['msg'];
	echo "<br />";
	echo "<hr />";
	echo "<br />";
	echo "</li>";
}

?> 
									
									
									
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> 
        </section>
    </main>
<!-- 
    <nav class="pagination-container">
        <button class="pagination-button" id="prev-button" aria-label="Previous page" title="Previous page">
            &lt;
        </button>

        <div id="pagination-numbers">

        </div>

        <button class="pagination-button" id="next-button" aria-label="Next page" title="Next page">
            &gt;
        </button>
    </nav> -->


    <script>
        const paginationNumbers = document.getElementById("pagination-numbers");
        const paginatedList = document.getElementById("paginated-list");
        const listItems = paginatedList.querySelectorAll("li");
        const nextButton = document.getElementById("next-button");
        const prevButton = document.getElementById("prev-button");

        const paginationLimit = 10;
        const pageCount = Math.ceil(listItems.length / paginationLimit);
        let currentPage = 1;

        const disableButton = (button) => {
            button.classList.add("disabled");
            button.setAttribute("disabled", true);
        };

        const enableButton = (button) => {
            button.classList.remove("disabled");
            button.removeAttribute("disabled");
        };

        const handlePageButtonsStatus = () => {
            if (currentPage === 1) {
                disableButton(prevButton);
            } else {
                enableButton(prevButton);
            }

            if (pageCount === currentPage) {
                disableButton(nextButton);
            } else {
                enableButton(nextButton);
            }
        };

        const handleActivePageNumber = () => {
            document.querySelectorAll(".pagination-number").forEach((button) => {
                button.classList.remove("active");
                const pageIndex = Number(button.getAttribute("page-index"));
                if (pageIndex == currentPage) {
                    button.classList.add("active");
                }
            });
        };

        const appendPageNumber = (index) => {
            const pageNumber = document.createElement("button");
            pageNumber.className = "pagination-number";
            pageNumber.innerHTML = index;
            pageNumber.setAttribute("page-index", index);
            pageNumber.setAttribute("aria-label", "Page " + index);

            paginationNumbers.appendChild(pageNumber);
        };

        const getPaginationNumbers = () => {
            for (let i = 1; i <= pageCount; i++) {
                appendPageNumber(i);
            }
        };

        const setCurrentPage = (pageNum) => {
            currentPage = pageNum;

            handleActivePageNumber();
            handlePageButtonsStatus();

            const prevRange = (pageNum - 1) * paginationLimit;
            const currRange = pageNum * paginationLimit;

            listItems.forEach((item, index) => {
                item.classList.add("hidden");
                if (index >= prevRange && index < currRange) {
                    item.classList.remove("hidden");
                }
            });
        };

        window.addEventListener("load", () => {
            getPaginationNumbers();
            setCurrentPage(1);

            prevButton.addEventListener("click", () => {
                setCurrentPage(currentPage - 1);
            });

            nextButton.addEventListener("click", () => {
                setCurrentPage(currentPage + 1);
            });

            document.querySelectorAll(".pagination-number").forEach((button) => {
                const pageIndex = Number(button.getAttribute("page-index"));

                if (pageIndex) {
                    button.addEventListener("click", () => {
                        setCurrentPage(pageIndex);
                    });
                }
            });
        });
    </script>

    <style>
        .pagination-container {
            width: calc(100% - 2rem);
            display: flex;
            align-items: center;
            position: absolute;
            bottom: 0;
            padding: 1rem 0;
            justify-content: center;
        }

        .pagination-number,
        .pagination-button {
            font-size: 1.1rem;
            background-color: transparent;
            border: none;
            margin: 0.25rem 0.25rem;
            cursor: pointer;
            height: 2.5rem;
            width: 2.5rem;
            border-radius: .2rem;
        }

        .pagination-number:hover,
        .pagination-button:not(.disabled):hover {
            background: #fff;
        }

        .pagination-number.active {
            color: #fff;
            background: #0085b6;
        }
    </style>


    <?php
    require_once($real_root . '/pages/views/mobile-show-footer-buttons.php');
    require_once($real_root . '/pages/views/footer.php');
    ?>



</body>

</html>