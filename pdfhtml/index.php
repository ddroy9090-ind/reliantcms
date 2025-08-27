<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Report</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <?php if (!empty($baseHref)): ?>
        <base href="<?= htmlspecialchars($baseHref) ?>">
    <?php endif; ?>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap');

        @page {
            size: A4;
            margin: 50px 40px;
        }

        @page :first {
            margin: 0 !important;
        }

        @page last-page {
            margin: 0;
        }

        body {
            font-family: "Roboto", sans-serif;
            font-size: 14px;
            color: #666;
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
        }


        h1,
        h3 {
            color: #fff;
            margin: 0 0 10px 0;
            font-weight: 400;
        }

        p {
            margin: 15px 0;
            text-align: justify;
        }

        ul {
            margin: 0 0 10px 20px;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        .page-break {
            page-break-after: always;
        }



        .table-report {
            width: 100%;
            margin: auto;
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 15px;
        }

        table td {
            font-size: 14px;
            padding: 5px;
            vertical-align: top;
        }

        .cover-page {
            width: 100%;
            height: 297mm;
            background-size: cover;
            background-position: center;
            position: relative;
            page-break-after: always;
        }

        .last-page {
            page: last-page;
            page-break-before: always;
        }

        .last-page img {
            width: 100%;
            height: 297mm;
            object-fit: cover;
            display: block;
            margin: 0;
            padding: 0;
        }

        .cover-page h2 {
            font-size: 18px;
            color: #111;
            /* font-weight: 400; */
            max-width: 500px;
            margin-bottom: 30px;
        }

        .cover-content {
            position: absolute;
            top: 20%;
            left: 0%;
        }

        .topbar {
            width: 90%;
            margin: 20px auto;
        }

        .topbar p {
            margin: 0;
            font-size: 12px;
            color: #666;
        }

        .top-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .top-content img {
            max-width: 180px;
        }

        .generalInformation {
            margin-bottom: 20px;
        }

        .generalInformation .numbering {
            display: inline-block;
            width: 40px;
            /* font-weight: 400; */
            font-size: 16px;
            color: #005c7c;
        }

        .generalInformation .heading-text {
            display: inline-block;
            /* font-weight: 400; */
            color: #005c7c;
            font-size: 16px;
        }

        .generalInformation p {
            margin-left: 40px;
            color: #666;
        }

        .table-report h1 {
            margin-top: 0px;
            font-size: 16px;
            text-align: center;
            background: #005c7c;
            padding: 5px;
            color: #fff;
            text-transform: uppercase;
            margin-bottom: 10px;
            /* font-weight: 500; */
        }



        .table-start td {
            border: 2px solid #eee;
            padding: 6px 10px;
            color: #666;
        }

        .table-start td.green-color {
            color: #005c7c;
            /* font-weight: 600; */
            width: 35%;
            background-color: #f9f9f9;
        }

        /* .pdf-log {
            margin: 20px 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            border-bottom: 1.5px #888 solid;
            padding-bottom: 10px;

        }

        .pdf-log p {
            margin: 0;
        }

        .pdf-log img {
            width: 200px;
        }

        .signature {
            display: flex;
            justify-content: space-between;
            margin-bottom: 30px;
        }

        .signature .logo img {
            width: 80px;

        } */
    </style>

</head>

<body>
    <?php $report = $report ?? []; ?>

    <!-- COVER PAGE -->
    <div class="cover-page" style="background-image: url('img/front-cover-green-1.png');">
        <div class="cover-content" style="padding: 50px;">
            <h2><?= htmlspecialchars($report['address'] ?? '') ?></h2>
            <div style="margin-bottom: 15px;">
                <strong style="color: #d01f28; display:block; margin-bottom:5px">Prepared For:</strong>
                <span style="color: #111;"><?= htmlspecialchars($report['client_name'] ?? '') ?></span>
            </div>

            <div style="margin-bottom: 15px;">
                <strong style="color: #d01f28; display:block; margin-bottom:5px">Date:</strong>
                <span style="color: #111;"><?= htmlspecialchars($report['batch'] ?? '') ?></span>
            </div>

            <div style="margin-bottom: 15px;">
                <strong style="color: #d01f28; display:block; margin-bottom:5px">Bank Reference Number:</strong>
                <span style="color: #111;">N/A</span>
            </div>

            <div style="margin-bottom: 15px;">
                <strong style="color: #d01f28; display:block; margin-bottom:5px">Reliant Reference Number:</strong>
                <span style="color: #111;">N/A</span>
            </div>

        </div>
    </div>

    <!-- DESKTOP RESIDENTIAL VALUATION REPORT -->
    <div class="table-report">
        <table style="width:100%; border:none; border-collapse:collapse; margin-bottom:20px;">
            <tr>
                <td style="width:70%; vertical-align:top; text-align:left;">
                    <p style="margin:0; font-size:12px;">
                        <strong style="color:#d01f28;">Prepared For:</strong> -
                        <span>N/A</span>
                    </p>
                    <p style="margin:0; font-size:12px;">
                        <strong style="color:#d01f28;">Reliant Reference Number:</strong> -
                        <span>N/A</span>
                    </p>
                </td>
                <td style="width:30%; text-align:right; vertical-align:top;">
                    <img src="../pdfhtml/img/logo.png" alt="Logo" style="max-width:120px; height:auto;">
                </td>
            </tr>
        </table>
        <h1>DESKTOP RESIDENTIAL VALUATION REPORT</h1>
        <table class="table-start" style="width:100%; border-collapse: collapse;">
            <tr>
                <td class="green-color">Date Of Instructions</td>
                <td>N/A</td>
            </tr>
            <tr>
                <td class="green-color">Reliant Reference Number</td>
                <td>N/A</td>
            </tr>
            <tr>
                <td class="green-color">Bank Reference Number</td>
                <td>N/A</td>
            </tr>
            <tr>
                <td class="green-color">Prepared For</td>
                <td>N/A</td>
            </tr>
        </table>
    </div>

    <!-- VALUATION SUMMARY -->
    <div class="table-report">
        <h1>VALUATION SUMMARY</h1>
        <table class="table-start" style="width:100%; border-collapse: collapse;">
            <tr>
                <td class="green-color">Client Name</td>
                <td><?= htmlspecialchars($report['client_name'] ?? '') ?>
                </td>
            </tr>
            <tr>
                <td class="green-color">Property Type</td>
                <td>
                    <?= htmlspecialchars($report['property_type'] ?? '') ?>
                </td>
            </tr>
            <tr>
                <td class="green-color">Property Address</td>
                <td><?= htmlspecialchars($report['address'] ?? '') ?>
                </td>
            </tr>
            <tr>
                <td class="green-color">Location (Coordinates)</td>
                <td>
                    <?= htmlspecialchars($report['location_coordinates'] ?? '') ?>
                </td>
            </tr>
            <tr>
                <td class="green-color">Property Description</td>
                <td>
                    <?= htmlspecialchars($report['property_description'] ?? '') ?>
                </td>
            </tr>
            <tr>
                <td class="green-color">Property Occupancy</td>
                <td>
                    <?= htmlspecialchars($report['property_occupancy'] ?? '') ?>
                </td>
            </tr>
            <tr>
                <td class="green-color">Property Tenure</td>
                <td>
                    <?= htmlspecialchars($report['property_tenure'] ?? '') ?>
                </td>
            </tr>
            <tr>
                <td class="green-color">Property Status</td>
                <td>
                    <?= htmlspecialchars($report['property_status'] ?? '') ?>
                </td>
            </tr>
            <tr>
                <td class="green-color">Developer</td>
                <td><?= htmlspecialchars($report['developer'] ?? '') ?>
                </td>
            </tr>
            <tr>
                <td class="green-color">Extent of Investigation</td>
                <td>As per instructions received from the bank we have not inspected the property internally or
                    externally</td>
            </tr>
            <tr>
                <td class="green-color">Property Overall Condition</td>
                <td>Assumed that the property is well maintained and offers standard finishes</td>
            </tr>
            <tr>
                <td class="green-color">Life</td>
                <td>Used Life – 12 years (approx.) as per INFORMATION PROVIDED. And
                    anticipated Remaining Life – 28 years (approx.) The above-mentioned
                    estimate of economic life assumes that the subject property structure has
                    been constructed in accordance with full planning permission, our
                    estimation of life also assumes that a regular planned property
                    maintenance program will be implemented over the lifetime of the
                    property.
                </td>
            </tr>
            <tr>
                <td class="green-color">Floors</td>
                <td><?= htmlspecialchars($report['floors'] ?? '') ?></td>
            </tr>
            <tr>
                <td class="green-color">BUA (Sq. M.)</td>
                <td><?= htmlspecialchars($report['bua_sqm'] ?? '') ?>
                </td>
            </tr>
            <tr>
                <td class="green-color">BUA (Sq. Ft.)</td>
                <td><?= htmlspecialchars($report['bua_sqft'] ?? '') ?>
                </td>
            </tr>
            <tr>
                <td class="green-color">Land Plot Size (Sq. M.)</td>
                <td>
                    <?= htmlspecialchars($report['land_plot_size_sqm'] ?? '') ?>
                </td>
            </tr>


        </table>
    </div>


    <div class="table-report" style="margin-top: 50px;">
        <table style="width:100%; border:none; border-collapse:collapse; margin-bottom:20px;">
            <tr>
                <td style="width:70%; vertical-align:top; text-align:left;">
                    <p style="margin:0; font-size:12px;">
                        <strong style="color:#d01f28;">Prepared For:</strong> -
                        <span>N/A</span>
                    </p>
                    <p style="margin:0; font-size:12px;">
                        <strong style="color:#d01f28;">Reliant Reference Number:</strong> -
                        <span>N/A</span>
                    </p>
                </td>
                <td style="width:30%; text-align:right; vertical-align:top;">
                    <img src="../pdfhtml/img/logo.png" alt="Logo" style="max-width:120px; height:auto;">
                </td>
            </tr>
        </table>
        <table class="table-start" style="width:100%; border-collapse: collapse;">
            <tr>
                <td class="green-color">Land Plot Size (Sq. Ft.)</td>
                <td>
                    <?= htmlspecialchars($report['land_plot_size_sqft'] ?? '') ?>
                </td>
            </tr>
            <tr>
                <td class="green-color">Documents provided</td>
                <td>
                    Screen short of property details and loan agreement
                </td>
            </tr>
            <tr>
                <td class="green-color">Basis of Value </td>
                <td>
                    Market Value
                </td>
            </tr>
            <tr>
                <td class="green-color">Purpose of Valuation</td>
                <td>
                    <?= htmlspecialchars($report['purpose_of_valuation'] ?? '') ?>
                </td>
            </tr>
            <tr>
                <td class="green-color">Mortgage Status</td>
                <td>
                    Assumed Mortgaged in Favor of National Bank of Fujairah
                </td>
            </tr>
            <tr>
                <td class="green-color">Date of Valuation</td>
                <td>
                    <?= htmlspecialchars($report['date_of_valuation'] ?? '') ?>
                </td>
            </tr>
            <tr>
                <td class="green-color">Capacity of Valuer</td>
                <td>
                    <?= htmlspecialchars($report['capacity_of_valuer'] ?? '') ?>
                </td>
            </tr>
            <tr>
                <td class="green-color">Special Remarks or Assumptions</td>
                <td>
                    We have not inspected the villa internally or externally, we have assumed that the property is
                    vacant and offers standard finishes.
                </td>
            </tr>

            <tr>
                <td class="green-color">Method of Valuation</td>
                <td>
                    <?= htmlspecialchars($report['method_of_valuation'] ?? '') ?>
                </td>
            </tr>
            <tr>
                <td class="green-color">Transaction Range</td>
                <td>
                    <?= htmlspecialchars($report['transaction_range'] ?? '') ?>
                </td>
            </tr>

            <tr>
                <td class="green-color">Adopted Rate per Sq. ft. for the subject property</td>
                <td>
                    <?= htmlspecialchars($report['adopted_rate_per_sqft'] ?? '') ?>
                </td>
            </tr>
            <tr>
                <td class="green-color">Market Value (Rounded) Subject to Valuation</td>
                <td style="color: #d01f28; font-weight:700; font-size:16px;">
                    <?= htmlspecialchars($report['market_value_rounded'] ?? '') ?>
                </td>
            </tr>
            <tr>
                <td class="green-color">Forced Sale Value (AED)</td>
                <td style="color: #d01f28; font-weight:700; font-size:16px;">
                    <?= htmlspecialchars($report['forced_sale_value_aed'] ?? '') ?>
                </td>
            </tr>
            <tr>
                <td class="green-color">Annual Rent (AED)</td>
                <td style="color: #d01f28; font-weight:700; font-size:16px;">
                    <?= htmlspecialchars($report['annual_rent_aed'] ?? '') ?>
                </td>
            </tr>
        </table>
    </div>
    <div class="page-break"></div>

    <!-- VALUATION CONCLUSION -->
    <div class="table-report">
        <!-- VALUATION SECTION -->
        <table style="width:100%; border:none; border-collapse:collapse; margin-bottom:20px;">
            <tr>
                <td style="width:70%; vertical-align:top; text-align:left;">
                    <p style="margin:0; font-size:12px;">
                        <strong style="color:#d01f28;">Prepared For:</strong> -
                        <span>N/A</span>
                    </p>
                    <p style="margin:0; font-size:12px;">
                        <strong style="color:#d01f28;">Reliant Reference Number:</strong> -
                        <span>N/A</span>
                    </p>
                </td>
                <td style="width:30%; text-align:right; vertical-align:top;">
                    <img src="../pdfhtml/img/logo.png" alt="Logo" style="max-width:120px; height:auto;">
                </td>
            </tr>
        </table>
        <h1>VALUATION CONCLUSION</h1>
        <div class="valuation-section" style="margin-bottom:20px;">
            <div class="valuation-subsection" style="margin-bottom:15px;">
                <h2 style="color:#005c7c; font-size:16px; margin-bottom:5px; font-weight:500">Valuation</h2>
                <h3 style="color:#005c7c; font-size:14px; margin-bottom:5px; font-weight:500">Basis of Valuation</h3>
                <p style="color:#666; font-size:14px; margin:0;">
                    The valuation has been conducted in accordance with the RICS Valuation – Global Standards latest
                    edition (with effect from 31st January 2025) and relevant statement of International Valuations
                    Standards.
                </p>
            </div>

            <div class="valuation-subsection" style="margin-bottom:15px;">
                <h3 style="color:#005c7c; font-size:14px; margin-bottom:5px;">Market Value</h3>
                <p style="color:#666; font-size:14px; margin:0;">
                    “The estimated amount for which an asset or liability should exchange on the valuation date between
                    a willing buyer and a willing seller in an arm’s length transaction after proper marketing where the
                    parties had each acted knowledgeably, prudently and without compulsion.”
                </p>
            </div>

            <div class="valuation-subsection" style="margin-bottom:15px;">
                <h3 style="color:#005c7c; font-size:14px; margin-bottom:5px; font-weight:500">Methodology</h3>
                <p style="color:#666; font-size:14px; margin-bottom:5px;">
                    For the subject property, we have implemented the Sales Comparison Method of valuation as it is
                    considered most suitable for this type of asset class. Moreover, it is one of the five established
                    valuation methodologies as stated in the RICS Valuation – Professional Standards (latest Edition).
                </p>
                <p style="color:#666; font-size:14px; margin:0;">
                    We have implemented this methodology by comparing the subject property to a similar property.
                    Basically, this method utilizes the evidence of transactions and/or current asking prices of similar
                    sites in the immediate vicinity and, if appropriate, applying some adjustments to the comparable
                    figures based on market research, discussion with independent agents and, in some cases, developers
                    and/or construction companies. This information is then applied to the subject property with
                    adjustments if appropriate, with the final value being derived.
                </p>
                <p>The following is the recent comparable evidence of similar properties in the vicinity:</p>
            </div>
        </div>
        <?php if (!empty($report['comparable_image'])): ?>
            <div class="">
                <img src="<?= htmlspecialchars($report['comparable_image']) ?>" alt="Comparable Table"
                    style="width:100%; height:auto;" />
            </div>
        <?php endif; ?>

    </div>
    <div class="page-break"></div>

    <div class="table-report">
        <table style="width:100%; border:none; border-collapse:collapse; margin-bottom:20px;">
            <tr>
                <td style="width:70%; vertical-align:top; text-align:left;">
                    <p style="margin:0; font-size:12px;">
                        <strong style="color:#d01f28;">Prepared For:</strong> -
                        <span>N/A</span>
                    </p>
                    <p style="margin:0; font-size:12px;">
                        <strong style="color:#d01f28;">Reliant Reference Number:</strong> -
                        <span>N/A</span>
                    </p>
                </td>
                <td style="width:30%; text-align:right; vertical-align:top;">
                    <img src="../pdfhtml/img/logo.png" alt="Logo" style="max-width:120px; height:auto;">
                </td>
            </tr>
        </table>
        <p>From the above table of sales transactions, we understand that there is a demand in the vicinity for the
            subject property. The area in general appears to be well planned and maintained and there are added
            advantages of the good road network and quick links to other parts of Dubai and the contiguous Emirates.
        </p>
        <p><strong style="color: #d01f28;">For subject property</strong>: From the above table we
            observe that there is
            a positive demand in this vicinity. We
            have gathered 5 comparables (recent sales transactions) and compared them with the subject property to
            arrive at the best-suited Market Value. The range we have considered spans from <strong>AED 1,122.00 – AED
                1,555.00</strong>
            price per sq. ft., considering the state of repair of the property, and factors affecting the value, thus we
            come up with the elective rate of <strong>AED 1,300.00 price</strong> per sq. ft. keeping special
            considerations (above
            Table). </p>

        <h3 style="color:#005c7c; font-size:14px; margin-bottom:5px; font-weight:500">Opinion of Market Value</h3>
        <p>Based on information made available by the Client and to the best of our knowledge and ability and the
            prevailing rates are taken into consideration, having regard to the observations above, we are of the
            opinion that the Market value of the subject as of the date of valuation, is estimated (rounded) listed
            as below:</p>

        <table class="table-start" style="width:100%; border-collapse: collapse;">
            <tr>
                <td class="green-color">Market Value (Rounded) Subject to Valuation</td>
                <td style="color: #d01f28; font-weight:700; font-size:16px;">
                    <?= htmlspecialchars($report['market_value_rounded'] ?? '') ?>
                    <?= htmlspecialchars($report['subject_to_valuation'] ?? '') ?>
                </td>
            </tr>
            <tr>
                <td class="green-color">Forced Sale Value in AED</td>
                <td style="color: #d01f28; font-weight:700; font-size:16px;">
                    <?= htmlspecialchars($report['forced_sale_value_aed'] ?? '') ?>
                </td>
            </tr>
            <tr>
                <td class="green-color">Annual Rent in AED</td>
                <td style="color: #d01f28; font-weight:700; font-size:16px;">
                    <?= htmlspecialchars($report['annual_rent_aed'] ?? '') ?>
                </td>
            </tr>
        </table>

        <h2 style="color:#005c7c; font-size:14px; margin-bottom:5px;">VALUATION UNCERTAINTY</h2>
        <p>Market instability is one of the main causes of valuation uncertainty; we believe that it is the
            probability that the negotiation of the sales should be considered in 6-12 months, as certain
            macroeconomic events cause a sudden and dramatic change in the markets.</p>
        <p>We sturdily advise that prior to any financial deal being entered into based upon this valuation, you
            obtain verification of the information within our valuation report and the validity of the stated
            assumptions we have taken into consideration.</p>
        <p>We advise the client that even as we value the assets reflecting current market conditions, there are
            certain risks that may or may not become uninsurable or accountable.</p>
        <p><strong>Note:</strong> As per the UAE Law on VAT effective since 1 January 2018, the subject property,
            its sale or lease, is subject to the Value Added Tax.</p>

        <h2 style="color:#005c7c; font-size:14px; margin-bottom:5px;">DISCLOSURE</h2>
        <p>This is a desktop opinion of value, based on the information provided by the bank. The information
            contained in this report is provided in good faith and no responsibility can be accepted for errors,
            omissions, or inaccuracies, which may become or subsequently become apparent because of inaccurate or
            incomplete information as may have been provided. Certain information in this report may therefore be
            subject to further verification. The valuation opinion is shared without any liability.</p>
    </div>
    <div class="page-break"></div>

    <div class="table-report">
        <!-- OPINION OF MARKET VALUE -->
        <div class="valuation-opinion" style="margin-top:20px; font-size:14px; color:#666;">
            <table style="width:100%; border:none; border-collapse:collapse; margin-bottom:20px;">
                <tr>
                    <td style="width:70%; vertical-align:top; text-align:left;">
                        <p style="margin:0; font-size:12px;">
                            <strong style="color:#d01f28;">Prepared For:</strong> -
                            <span>N/A</span>
                        </p>
                        <p style="margin:0; font-size:12px;">
                            <strong style="color:#d01f28;">Reliant Reference Number:</strong> -
                            <span>N/A</span>
                        </p>
                    </td>
                    <td style="width:30%; text-align:right; vertical-align:top;">
                        <img src="../pdfhtml/img/logo.png" alt="Logo" style="max-width:120px; height:auto;">
                    </td>
                </tr>
            </table>
            <!-- <div class="pdf-log">
                <div>
                    <p><strong style="color: #d01f28;">Prepared For:</strong> -
                        <span>N/A</span>
                    </p>
                    <p><strong style="color: #d01f28;">Reliant Reference Number:</strong> -
                        <span>N/A</span>
                    </p>
                </div>
                <img src="../pdfhtml/img/logo.png" alt="">
            </div> -->
            <h2 style="color:#005c7c; font-size:14px; margin-bottom:5px;">CONCLUSION</h2>
            <p>This report is compiled based on the information received and to the best of our skill, knowledge and
                understanding. Should there be any matters contained within this report you wish to discuss, please do
                not hesitate to contact the undersigned.</p>
            <p>This report is issued without prejudice and personal liability.</p>

            <p style="margin-top:30px;">Yours Sincerely,</p>
            <p>For and on behalf of<br><strong style="display: inline-block; margin:10px 0">RELIANT REAL ESTATE
                    VALUATION SERVICES L.L.C.<br>(trading as Reliant
                    Surveyors)</strong></p>

            <!-- <div class="signature">
                <div>
                    <p><img src="../pdfhtml/img/abhinav-sharma.png" alt="" width="200"></p>
                    <strong style="display: inline-block; margin-bottom:10px">ABHINAV SHARMA</strong><br>
                    Partner<br>
                    BBA (Banking & Insurance), AssocRICS, MCMI<br>
                    RICS Registered Valuer, RERA Valuer – 39898
                </div>
                <div>
                    <img src="../pdfhtml/img/signature-logo.png" alt="" style="width: 80%; margin:auto;">
                </div>
                <div>
                    <p><img src="../pdfhtml/img/amrita.png" alt="" width="200"></p>
                    <strong style="display: inline-block; margin-bottom:10px">AMRITA CHANDHOK</strong><br>
                    Partner<br>
                    BCom Hons, MCMI, AssocRICS, MRPSA<br>
                    RICS Registered Valuer, ADRES valuer
                </div>
            </div> -->
            <table style="width:100%; border:none; border-collapse:collapse; margin-top:30px; text-align:left;">
                <tr>
                    <!-- Left Signature -->
                    <td style="width:35%; vertical-align:top; text-align:left; padding:10px;">
                        <p style="margin:0 0 5px 0;">
                            <img src="../pdfhtml/img/abhinav-sharma.png" alt="" width="200">
                        </p>
                        <strong style="display:block; margin-bottom:5px;">ABHINAV SHARMA</strong>
                        Partner<br>
                        BBA (Banking & Insurance), AssocRICS, MCMI<br>
                        RICS Registered Valuer, RERA Valuer – 39898
                    </td>

                    <!-- Center Logo -->
                    <td style="width:30%; vertical-align:middle; text-align:left; padding:10px;">
                        <img src="../pdfhtml/img/signature-logo.png" alt="" style="width:80%; height:auto;">
                    </td>

                    <!-- Right Signature -->
                    <td style="width:35%; vertical-align:top; text-align:left; padding:10px;">
                        <p style="margin:0 0 5px 0;">
                            <img src="../pdfhtml/img/amrita.png" alt="" width="200">
                        </p>
                        <strong style="display:block; margin-bottom:5px;">AMRITA CHANDHOK</strong>
                        Partner<br>
                        BCom Hons, MCMI, AssocRICS, MRPSA<br>
                        RICS Registered Valuer, ADRES valuer
                    </td>
                </tr>
            </table>



        </div>

    </div>

    <!-- LAST PAGE WITH FULL IMAGE -->
    <div class="last-page">
        <img src="img/footer-cover-green.png" alt="Last Page">
    </div>

</body>

</html>